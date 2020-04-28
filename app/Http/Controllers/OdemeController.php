<?php

namespace App\Http\Controllers;

use App\Http\Requests\OdemeOnayRequest;
use App\Models\Adresler;
use App\Models\Siparis;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class OdemeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('anasayfa')
                ->with('mesaj_tur', 'info')
                ->with('mesaj', 'Ödeme işlemi için oturum açmanız veya kullanıcı kaydı yapmanız gerekmektedir.');
        } else if (count(Cart::getContent()) == 0) {
            return redirect()->route('anasayfa')
                ->with('mesaj_tur', 'info')
                ->with('mesaj', 'Ödeme işlemi için sepetinizde bir ürün bulunmalıdır.');
        }

        $adresler = auth()->user()->adresler;


        return view('odeme', compact('adresler'));
    }

    public function odemeyap(OdemeOnayRequest $request)
    {

        $faturaAdresi = Adresler::find($request->get('fatura_adresi'));
        $teslimatAdresi = Adresler::find($request->get('teslimat_adresi'));
        $siparis = collect([
            'kullanici_id' => auth()->id(),
            'sepet_id' => session('aktif_sepet_id'),
            'siparis_tutari' => Cart::getTotal(),
            'durum' => "Siparişiniz Alındı",
            'odeme_yontemi' => $request->get('odeme'),
            'fatura_adresi' => sprintf("%s %s %s / %s",
                $faturaAdresi->satir1,
                $faturaAdresi->satir2,
                $faturaAdresi->ilceAdi->ilce_adi,
                $faturaAdresi->ilAdi->il_adi
            ),
            'teslimat_adresi' => sprintf("%s %s %s / %s",
                $teslimatAdresi->satir1,
                $teslimatAdresi->satir2,
                $teslimatAdresi->ilceAdi->ilce_adi,
                $teslimatAdresi->ilAdi->il_adi
            ),
            'ad' => $faturaAdresi->ad,
            'soyad' => $faturaAdresi->soyad,
            'telefon' => $faturaAdresi->telefon
        ]);

        // $siparis->dd();

        Siparis::create($siparis->toArray());
        Cart::clear();
        session()->forget('aktif_sepet_id');

        return redirect()->route('siparisler')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Siparişiniz başarıyla alındı.');
    }
}

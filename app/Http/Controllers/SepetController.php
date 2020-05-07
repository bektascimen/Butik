<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Models\SepetUrun;
use App\Models\Urun;
use App\Models\UrunDetay;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('sepet');
    }

    public function ekle(Request $request)
    {
        $urun = Urun::find(request('id'));
        $cartItem = Cart::add($urun->id, $urun->urun_adi, ($urun->indirimli_fiyat ?: $urun->fiyat) , $request->get("quantity"), ['slug' => $urun->slug, 'urun_resmi'=> $urun->detay->urun_resmi]);

        if (auth()->check()) {
            $aktif_sepet_id = session()->get('aktif_sepet_id');
            if (!session()->has('aktif_sepet_id')) {
                $aktif_sepet = Sepet::create([
                    'kullanici_id' => auth()->id()
                ]);
                $aktif_sepet_id = $aktif_sepet->id;
                session()->put('aktif_sepet_id', $aktif_sepet_id);
            } else {
                $aktif_sepet = Sepet::findOrFail($aktif_sepet_id);
            }

            SepetUrun::updateOrCreate(
                ['sepet_id' => $aktif_sepet->id, 'urun_id' => $urun->id],
                ['adet' => $request->get("quantity"), 'fiyat' => $urun->indirimli_fiyat ?: $urun->fiyat, 'durum' => 'Beklemede', 'urun_resmi' => $urun->detay->urun_resmi]
            );

        }

        if (request()->hasFile('urun_resmi'))
        {
            $this->validate(request(), [
                'urun_resmi' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('urun_resmi');
            $urun_resmi = request()->urun_resmi;

            $dosyaadi = $urun->id . "-" . time() . "." . $urun_resmi->extension();


            if ($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/sepetUrunler', $dosyaadi);

                UrunDetay::updateOrCreate(
                    ['urun_id'=>$urun->id],
                    ['urun_resmi'=>$dosyaadi]
                );
            }
        }

        return redirect()
            ->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sepete eklendi.');
    }

    public function kaldir($itemId)
    {
        if (auth()->check()) {
            $aktif_sepet_id = session('aktif_sepet_id');
            $cartItem = Cart::get($itemId);
            SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id', $cartItem->id)->delete();
        }

        Cart::remove($itemId);

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sepetten kaldırıldı.');
    }

    public function bosalt()
    {
        if (auth()->check()) {
            $aktif_sepet_id = session('aktif_sepet_id');
            SepetUrun::where('sepet_id', $aktif_sepet_id)->delete();
        }

        Cart::clear();

        return redirect()->route('sepet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Sepetinizde ürün bulunmuyor.');
    }

    public function guncelle($itemId)
    {
        $quantity = request('quantity');
        $aktif_sepet_id = session('aktif_sepet_id');
        Cart::update($itemId, array('quantity' => $quantity));

        $cartItem = Cart::get($itemId);
        $sepetUrun = SepetUrun::where([
            'sepet_id' => $aktif_sepet_id,
            'urun_id' => $itemId
        ])->first();

        $sepetUrun->adet = $cartItem->quantity;
        $sepetUrun->save();
        return response()->json(['success' => true]);
    }
}

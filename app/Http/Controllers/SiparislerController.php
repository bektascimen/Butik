<?php

namespace App\Http\Controllers;

use App\Models\Siparis;
use Illuminate\Http\Request;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

class SiparislerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $siparisler = Siparis::with('sepet')
            ->whereHas('sepet', function ($query) {
                $query->where('kullanici_id', auth()->id());
            })
            ->orderByDesc('olusturma_tarihi')
            ->get();
        return view('siparisler', compact('siparisler'));
    }

    public function detay($id)
    {
        $siparis = Siparis::with('sepet.sepet_urunler.urun')
            ->whereHas('sepet', function ($query) {
                $query->where('kullanici_id', auth()->id());
            })
            ->where('siparis.id', $id)
            ->firstOrFail();
        return view('siparis', compact('siparis'));
    }

    public function sil($id)
    {
        Siparis::destroy($id);

        return redirect()
            ->route('siparisler')
            ->with('mesaj', 'Sipariş İptal Edildi')
            ->with('mesaj_tur', 'success');
    }

    public function puan(Request $request)
    {
        $mesaj = "Puan verildi";
        $mesaj_tur = "success";

        $siparis = Siparis::find($request->get("siparis_id"));
        if (!$siparis->siparis_puani) {
            $siparis->siparis_puani = $request->get("star");
            $siparis->save();
            if ($siparis->isDirty('siparis_puani')){
                $mesaj = "Teknik bir sorun yüzünden puanlama yapılamadı. Tekrar deneyin.";
                $mesaj_tur = "danger";
            }
        } else {
            $mesaj = "Daha önce puanlandı.";
            $mesaj_tur = "info";
        }

        return redirect()
            ->route('siparisler')
            ->with('mesaj', $mesaj)
            ->with('mesaj_tur', $mesaj_tur);
    }
}

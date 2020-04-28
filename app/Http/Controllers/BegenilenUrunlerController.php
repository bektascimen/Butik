<?php

namespace App\Http\Controllers;

use App\Models\BegenilenUrunler;
use Illuminate\Http\Request;

class BegenilenUrunlerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $begenilen_urunler = auth()->user()->begenilen_urunler;

        return view('begenilen-urunler', compact('begenilen_urunler'));
    }

    public function ekle(Request $request)
    {
        $validate = $request->validate([
            'urun_id' => 'required'
        ]);

        $data = [
            'kullanici_id' => auth()->id(),
            'urun_id' => $request->urun_id
        ];

        BegenilenUrunler::create($data);

        return redirect()
            ->route('begenilen-urunler')
            ->with('mesaj', 'Ürün Eklendi')
            ->with('mesaj_tur', 'success');
    }

    public function sil($id)
    {
        BegenilenUrunler::destroy($id);

        return redirect()
            ->route('begenilen-urunler')
            ->with('mesaj', 'Ürün Çıkarıldı')
            ->with('mesaj_tur', 'success');
    }
}

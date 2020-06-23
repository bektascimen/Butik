<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Ozellikler;
use App\Models\Renk;
use App\Models\Urun;
use App\Models\UrunOzellikleri;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($slug_urunadi)
    {
        $urun = Urun::whereSlug($slug_urunadi)->firstOrFail();
        $kategori = Kategori::get();

        $urunOzellikleriList = UrunOzellikleri::where("urun_id", $urun->id)->get();

        $urunStok = $urunOzellikleriList->sum('stok');

        $urunOzellikleri = $urunOzellikleriList->map(function ($item) {
            return $item->ozellik_deger_id;
        })->toArray();

        $ozellikler = Ozellikler::whereHas("degerler", function ($query) use ($urunOzellikleri) {
            $query->whereIn("id", $urunOzellikleri);
        })->get();


        return view('urun', compact('urun','kategori', 'ozellikler', "urunOzellikleri", 'urunStok'));
    }

    public function ara()
    {
        $aranan = request()->input('aranan');
        //$urunler = Urun::where('urun_adi', 'like', "%$aranan%")
            //->paginate(20);
        $urunler = Urun::where('id', 'like', "%$aranan%")
            ->paginate(20);

        request()->flash();
        return view('arama', compact('urunler'));
    }
}

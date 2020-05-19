<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Ozellikler;
use App\Models\Urun;
use App\Models\UrunOzellikleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($slug_kategoriadi)
    {
        $kategori = Kategori::where('slug', $slug_kategoriadi)->firstOrFail();

        $urunFiltre = Ozellikler::with("degerler")->get();

        $urunMaxFiyat = DB::table('urun')->max('fiyat');
        $urunMinFiyat = DB::table('urun')->min('fiyat');

        $urunler = Urun::whereHas("kategoriUrun", function ($query) use ($kategori) {
            $query->where("kategori_id", $kategori->id);
        })->paginate(15);
        $solKategoriler = $kategori->alt;

        return view('kategori', compact('urunler', 'kategori', 'solKategoriler', 'urunMaxFiyat', 'urunFiltre', 'urunMinFiyat'));

    }

    function filtre(Request $request)
    {

        $filtre = Urun::whereBetween("fiyat", [$request->get("minimum_fiyat"), $request->get("maximum_fiyat")]);


        if ($request->has("filtre")) {
            $degerler = UrunOzellikleri::whereIn("ozellik_deger_id", $request->get("filtre"))->pluck("urun_id");
            $filtre->whereIn("id", $degerler->toArray());
        }

        $filtre->whereHas("kategoriUrun", function ($query) use ($request) {
            $query->where("kategori_id", $request->get("kategori_id"));
        });

        $urunler = $filtre->get();

        return view("urun-liste", compact("urunler"));
    }
}

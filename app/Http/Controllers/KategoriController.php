<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
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
        $urunRenkFiltre = Urun::all()->groupBy("renk");
        $urunBedenFiltre = Urun::all()->groupBy("beden");
        $urunMaxFiyat = DB::table('urun')->max('fiyat');
        $urunMinFiyat = DB::table('urun')->min('fiyat');
        $urunler = Urun::whereHas("kategoriUrun", function ($query) use ($kategori) {
            $query->where("kategori_id", $kategori->id);
        })->paginate(15);
        $solKategoriler = $kategori->alt;

        return view('kategori', compact('urunler', 'kategori', 'solKategoriler', 'urunRenkFiltre', 'urunMaxFiyat', 'urunBedenFiltre', 'urunMinFiyat'));

    }

    function filtre(Request $request)
    {

        $filtre = Urun::whereBetween("fiyat", [$request->get("minimum_fiyat"), $request->get("maximum_fiyat")]);
        if ($request->has("beden")) {
            $filtre->whereIn("beden", $request->get("beden"));
        }
        if ($request->has("renk")) {
            $filtre->whereIn("renk", $request->get("renk"));
        }

        $filtre->whereHas("kategoriUrun", function ($query) use ($request) {
            $query->where("kategori_id", $request->get("kategori_id"));
        });

        $urunler = $filtre->get();

        return view("urun-liste", compact("urunler"));
    }
}

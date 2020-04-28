<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\Urun;
use App\Resources\Menu;

class AnasayfaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $kategori_urun = Kategori::select('kategori.*')
            ->join('kategori_urun', 'kategori_urun.urun_id', 'urun_id')
            ->where('kategori_urun.urun_id', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(2)
            ->get();

        $urunlerSlider = Urun::whereHas("detay", function ($query) {
            $query->where('gosterSlider', 1);
        })->orderBy('guncelleme_tarihi', "DESC")
            ->take(5)
            ->get();
//            Urun::select('urun.*')
//            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
//            ->where('urun_detay.gosterSlider', 1)
//            ->orderBy('guncelleme_tarihi', 'desc')
//            ->take(5)->get();

        $urunGununFirsati = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.gosterGununFirsati', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(1)
            ->get();

        $urunlerOneCikan = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.gosterOneCikan', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(4)
            ->get();

        $urunlerCokSatan = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.gosterCokSatan', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(4)->get();

        $urunlerIndirimli = Urun::select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.gosterIndirimli', 1)
            ->orderBy('guncelleme_tarihi', 'desc')
            ->take(4)->get();

        $kategoriler = Kategori::get();

        return view('anasayfa', compact('urunlerSlider', 'urunGununFirsati', 'kategoriler', 'urunlerOneCikan', 'urunlerCokSatan', 'urunlerIndirimli'));
    }



}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
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
        $urunBedenFiltre = Urun::all()->groupBy("beden");
        $urunRenkFiltre = Urun::where('renk')->get();
        $kategori = Kategori::get();

        return view('urun', compact('urun','kategori', 'urunBedenFiltre', 'urunRenkFiltre'));
    }

    public function ara()
    {
        $aranan = request()->input('aranan');
        $urunler = Urun::where('urun_adi', 'like', "%$aranan%")
            ->paginate(20);

        request()->flash();
        return view('arama', compact('urunler'));
    }
}

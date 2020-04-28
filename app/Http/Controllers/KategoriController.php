<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class KategoriController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($slug_kategoriadi)
    {
        $kategori = Kategori::where('slug', $slug_kategoriadi)->firstOrFail();
        $urunler = $kategori->tumUrunler()->paginate(15);
        if (!$kategori->alt()->count()) {
            $urunler = $kategori->urunler()->paginate(15);
            $kategori = Kategori::where('id', $kategori->parent_id)->firstOrFail();
        }
        $solKategoriler = $kategori->alt;

        return view('kategori', compact('urunler', 'kategori', 'solKategoriler'));

    }
}

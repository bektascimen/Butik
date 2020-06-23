<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GizlilikPolitikasiController extends Controller
{
    public function index()
    {
        return view('gizlilik-politikasi');
    }
}

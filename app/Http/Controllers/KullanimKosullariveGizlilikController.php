<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullanimKosullariveGizlilikController extends Controller
{
    public function index()
    {
        return view('kullanimkosullarivegizlilik');
    }
}

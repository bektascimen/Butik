<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdemeBildirmeController extends Controller
{
    public function index()
    {
        return view('odeme-bildirme');
    }
}

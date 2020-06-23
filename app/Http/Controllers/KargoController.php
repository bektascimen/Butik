<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KargoController extends Controller
{
    public function index()
    {
        return view('kargo-teslimat');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SSSController extends Controller
{
    public function index()
    {
        return view('sikca-sorulan-sorular');
    }
}

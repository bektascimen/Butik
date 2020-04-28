<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use Illuminate\Http\Request;

class KisiselBilgilerController extends Controller
{
    public function index()
    {
        $kullanici = auth()->user()->bilgi;

        return view('kisiselbilgiler', compact('kullanici'));
    }
    public function kisiselbilgiguncelle_form(Request $request, $id)
    {
        $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
        ]);

        $kullanici = Kullanici::find($id);
        $kullanici->update([
            'ad' => $request->ad,
            'soyad' => $request->soyad,
        ]);

        return redirect()
            ->route('kisiselbilgilerim')
            ->with('mesaj', 'Hesap Bilgileri Güncellendi')
            ->with('mesaj_tur', 'success');
    }


}

<?php

namespace App\Http\Controllers;

use App\Il;
use App\Ilce;
use App\Models\Adresler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdresBilgilerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $adresler = auth()->user()->adresler;

        return view('adresbilgiler', compact('adresler'));
    }

    public function adreskayit()
    {
        return view('adreskayit');
    }

    public function adreskayit_form(Request $request)
    {
        $request->validate([
            'adres_baslik' => 'required',
            'satir1' => 'required',
            'satir2' => 'required',
            'telefon' => 'required',
            'ad' => 'required',
            'soyad' => 'required'
        ]);

        $data = [
            'adres_baslik' => $request->adres_baslik,
            'satir1' => $request->satir1,
            'satir2' => $request->satir2,
            'telefon' => $request->telefon,
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'varsayilan' => (int) $request->varsayilan,
            'kullanici_id' => auth()->id(),
            'il_id' => $request->il_id,
            'ilce_id' => $request->ilce_id
        ];
        if ((int)$request->varsayilan == 1) {
            Adresler::where('kullanici_id', auth()->id())
                ->update(['varsayilan' => 0]);
        }

        Adresler::create($data);

        return redirect()
            ->route('adresbilgilerim')
            ->with('mesaj', 'Adres Eklendi')
            ->with('mesaj_tur', 'success');
    }

    public function adresguncelle($id)
    {
        $adresler = Adresler::find($id);

        return view('adresbilgileriguncelle', compact('adresler'));
    }

    public function adresguncelle_form(Request $request, $id)
    {
        $request->validate([
            'adres_baslik' => 'required',
            'ad' => 'required',
            'soyad' => 'required',
            'satir1' => 'required',
            'satir2' => 'required',
            'telefon' => 'required'
        ]);

        $adresler = Adresler::find($id);
        $adresler->update([
            'adres_baslik' => $request->adres_baslik,
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'satir1' => $request->satir1,
            'satir2' => $request->satir2,
            'telefon' => $request->telefon,
            'varsayilan' => (int) $request->get('varsayilan')
        ]);

        return redirect()
            ->route('adresbilgilerim')
            ->with('mesaj', 'Adres Güncellendi')
            ->with('mesaj_tur', 'success');
    }

    public function sil($id)
    {
        Adresler::destroy($id);

        return redirect()
            ->route('adresbilgilerim')
            ->with('mesaj', 'Adres Silindi')
            ->with('mesaj_tur', 'success');
    }

    public function il(Request $request ){
        $iller = Il::get();

        return $iller->toJson();
    }

    public function ilce(Request $request ){
        $ilceler = Ilce::where("il_id", $request->get('il_id'))->get();

        return $ilceler->toJson();
    }
}

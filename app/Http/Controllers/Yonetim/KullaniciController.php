<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KullaniciController extends Controller
{
    public function oturumac()
    {
        if (request()->isMethod('POST'))
        {
            $this->validate(request(), [
                'email' => 'required|email',
                'sifre' => 'required'
            ]);

            $credentials = [
                'email' => request()->get('email'),
                'password' => request()->get('password'),
                'yonetici_mi' => 1,
                'uye_durumu' => 1
            ];

            if (Auth::guard('yonetim')->attempt($credentials, request()->has('benihatirla')))
            {
                return redirect()->route('yonetim.anasayfa');
            }
            else{
                return back()->withInput()->withErrors(['email'=>'Giriş Hatalı!']);
            }
        }

        return view('yonetim.oturumac');
    }

    public function oturumukapat()
    {
        Auth::guard('yonetim')->logout();
        request()->session()->flush();
        request()->session()->regenerate();

        return redirect()->route('yonetim.oturumac');
    }

    public function index()
    {
        if (request()->filled('aranan'))
        {
            request()->flash();
            $aranan = request('aranan');
            $list = Kullanici::where('ad','like', "%$aranan%")
                ->orWhere('email', 'like', "%$aranan%")
                ->orderBy('id')
                ->paginate(20);
        } else{
            $list = Kullanici::orderBy('olusturma_tarihi')->paginate(20);
        }

        return view('yonetim.kullanici.index', compact('list'));
    }

    public function form($id=0)
    {
        $entry = new Kullanici;
        if ($id>0)
        {
            $entry = Kullanici::find($id);
        }

        $kategoriler = Kategori::all();

        return view('yonetim.kullanici.form', compact('entry', 'kategoriler'));
    }

    public function kaydet($id=0)
    {
        $data['uye_durumu'] = request()->has('uye_durumu') && request('uye_durumu') == 1 ? 1 : 0;
        $data['yonetici_mi'] = request()->has('yonetici_mi') && request('yonetici_mi') == 1 ? 1 : 0;


        if ($id>0)
        {
            $entry = Kullanici::where('id', $id)->firstOrFail();
            $entry->update($data);
        }

        return redirect()
            ->route('yonetim.kullanici.duzenle', $entry->id)
            ->with('mesaj', ($id>0 ? 'Güncellendi' : 'Kaydedildi'))
            ->with('mesaj_tur', 'success');
    }

    public function sil($id)
    {
        Kullanici::destroy($id);

        return redirect()
            ->route('yonetim.kullanici')
            ->with('mesaj', 'Kayıt Silindi')
            ->with('mesaj_tur', 'success');
    }

}

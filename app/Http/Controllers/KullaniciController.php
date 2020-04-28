<?php

namespace App\Http\Controllers;

use App\Http\Requests\KayitOlRequest;
use App\Http\Requests\KullaniciGirisRequest;
use App\Models\Kullanici;
use App\Mail\KullaniciKayitMail;
use App\Models\Sepet;
use http\Env\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function giris()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'sifre' => 'required'
        ]);

        $credentials = [
            'email' => request('email'),
            'password' => request('password'),
            'uye_durumu' => 1
        ];

        if (auth()->attempt($credentials, request()->has('benihatirla')))
        {
            request()->session()->regenerate();

            $aktif_sepet_id = Sepet::aktif_sepet_id();
            if (is_null($aktif_sepet_id))
            {
                $aktif_sepet = Sepet::create(['kullanici_id'=>auth()->id()]);
                $aktif_sepet_id = $aktif_sepet->id;
            }

            return redirect()->intended('/');
        } else {
            $errors = ['email' => 'Hatalı giriş'];
            return back()->withErrors($errors);
        }
    }

    public function kayitol_form()
    {
        return view('kullanici.kayitol');
    }

    public function kayitol(KayitOlRequest $request)
    {
        if ($request->validated()) {
            $kullanici = Kullanici::create([
                'ad' => $request->get("ad"),
                'soyad' => $request->get("soyad"),
                'email' => $request->get('email'),
                'sifre' => Hash::make($request->get('sifre')),
                'aktivasyon_anahtari' => Str::random(60),
                'remember_token' => Str::random(60),
                'uye_durumu' => 0,
            ]);

            Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));

            event(new Registered($kullanici));
            // auth()->login($kullanici);

            redirect()->route('anasayfa');
        }

        return redirect()
            ->route('anasayfa')
            ->with('mesaj', 'Hesabınızı mail adresinize gelen mail ile aktifleştiriniz.')
            ->with('mesaj_tur', 'success');
    }

    public function oturumukapat(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('anasayfa');
    }

    public function aktiflestir($anahtar)
    {
        $kullanici = Kullanici::where('aktivasyon_anahtari', $anahtar)->first();
        if (!is_null($kullanici))
        {
            $kullanici->aktivasyon_anahtari = null;
            $kullanici->uye_durumu = 1;
            $kullanici->save();
            return redirect()->to('/')
                ->with('mesaj', 'Kullanıcı kaydınız aktifleştirildi')
                ->with('mesaj_tur', 'success');
        }
        else{
            return redirect()->to('/')
                ->with('mesaj', 'Kullanıcı kaydınız aktifleştirilemedi.')
                ->with('mesaj_tur', 'warning');
        }
    }
}

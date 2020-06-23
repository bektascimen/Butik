<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'yonetim', 'namespace' => 'Yonetim'], function () {
    Route::redirect('/', '/yonetim/oturumac');
    Route::match(['get', 'post'], '/oturumac', 'KullaniciController@oturumac')->name('yonetim.oturumac');
    Route::get('/oturumukapat', 'KullaniciController@oturumukapat')->name('yonetim.oturumukapat');

    Route::middleware(['yonetim'])->group(function () {
        Route::get('/anasayfa', 'AnasayfaController@index')->name('yonetim.anasayfa');

        // /yonetim/kullanici/yeni
        Route::group(['prefix' => 'kullanici'], function () {
            Route::match(['get', 'post'], '/', 'KullaniciController@index')->name('yonetim.kullanici');
            Route::get('/yeni', 'KullaniciController@form')->name('yonetim.kullanici.yeni');
            Route::get('/duzenle/{id}', 'KullaniciController@form')->name('yonetim.kullanici.duzenle');
            Route::post('/kaydet/{id?}', 'KullaniciController@kaydet')->name('yonetim.kullanici.kaydet');
            Route::get('/sil/{id}', 'KullaniciController@sil')->name('yonetim.kullanici.sil');
        });

        Route::group(['prefix' => 'kategori'], function () {
            Route::match(['get', 'post'], '/', 'KategoriController@index')->name('yonetim.kategori');
            Route::get('/yeni', 'KategoriController@form')->name('yonetim.kategori.yeni');
            Route::get('/duzenle/{id}', 'KategoriController@form')->name('yonetim.kategori.duzenle');
            Route::post('/kaydet/{id?}', 'KategoriController@kaydet')->name('yonetim.kategori.kaydet');
            Route::get('/sil/{id}', 'KategoriController@sil')->name('yonetim.kategori.sil');
        });

        Route::group(['prefix' => 'urun'], function () {
            Route::match(['get', 'post'], '/', 'UrunController@index')->name('yonetim.urun');
            Route::get('/yeni', 'UrunController@form')->name('yonetim.urun.yeni');
            Route::get('/duzenle/{id}', 'UrunController@form')->name('yonetim.urun.duzenle');
            Route::post('/kaydet/{id?}', 'UrunController@kaydet')->name('yonetim.urun.kaydet');
            Route::get('/sil/{id}', 'UrunController@sil')->name('yonetim.urun.sil');
            Route::match(['get','post'], '/nitelik-ekle/{id}', 'UrunController@nitelikekle')->name('yonetim.urun.nitelikekle');
            Route::post('/statu-guncelle', 'UrunController@statuGuncelle')->name('yonetim.urun.statuGuncelle');
        });


        Route::group(['prefix' => 'siparis'], function () {
            Route::match(['get', 'post'], '/', 'SiparisController@index')->name('yonetim.siparis');
            Route::get('/yeni', 'SiparisController@form')->name('yonetim.siparis.yeni');
            Route::get('/duzenle/{id}', 'SiparisController@form')->name('yonetim.siparis.duzenle');
            Route::post('/kaydet/{id?}', 'SiparisController@kaydet')->name('yonetim.siparis.kaydet');
            Route::get('/sil/{id}', 'SiparisController@sil')->name('yonetim.siparis.sil');
        });
    });
});

Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/urun/filtre', 'KategoriController@filtre')->name('kategori.filtre');
Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');
Route::post('/ara', 'UrunController@ara')->name('urun_ara');
Route::get('/ara', 'UrunController@ara')->name('urun_ara');

Route::get('/kisiselbilgilerim', 'KisiselBilgilerController@index')->name('kisiselbilgilerim');


Route::get('/fabric', 'FabricJSController@index')->name('fabric');


Route::group(['prefix' => 'sepet'], function () {
    Route::get('/', 'SepetController@index')->name('sepet');
    Route::get('/ekle', 'SepetController@index');
    Route::post('/ekle', 'SepetController@ekle')->name('sepet.ekle');
    Route::delete('/kaldir/{itemId}', 'SepetController@kaldir')->name('sepet.kaldir');
    Route::delete('/bosalt', 'SepetController@bosalt')->name('sepet.bosalt');
    Route::patch('/guncelle', 'SepetController@guncelle')->name('sepet.guncelle');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/odeme', 'OdemeController@index')->name('odeme');
    Route::post('/odeme', 'OdemeController@odemeyap')->name('odemeyap');
    Route::get('/siparisler', 'SiparislerController@index')->name('siparisler');
    Route::get('/siparisler/{id}', 'SiparislerController@detay')->name('siparis');
    Route::post('/siparisler/puan', 'SiparislerController@puan')->name('siparis.puanla');
    Route::get('/sil/{id}', 'SiparislerController@sil')->name('siparis.sil');

    Route::get('/kisiselbilgilerim', 'KisiselBilgilerController@index')->name('kisiselbilgilerim');
    Route::post('/kisiselbilgilerim/guncelle/{id}', 'KisiselBilgilerController@kisiselbilgiguncelle_form')->name('kisisel.bilgilerim');

    Route::get('/begenilen-urunler', 'BegenilenUrunlerController@index')->name('begenilen-urunler');
    Route::post('/begenilen-urunler/ekle', 'BegenilenUrunlerController@ekle')->name('begenilen-urunler.ekle');
    Route::get('/begenilen-urunler/sil/{id}', 'BegenilenUrunlerController@sil')->name('begenilen-urunler.sil');

    Route::group(['prefix' => 'adresbilgilerim'], function () {
        Route::get('/', 'AdresBilgilerController@index')->name('adresbilgilerim');
        Route::get('/guncelle/{id}', 'AdresBilgilerController@adresguncelle')->name('adresguncelle');
        Route::post('/guncelle/{id}', 'AdresBilgilerController@adresguncelle_form')->name('adres.guncelle');
        Route::get('/adreskayit', 'AdresBilgilerController@adreskayit')->name('adreskayit');
        Route::post('/adreskayit', 'AdresBilgilerController@adreskayit_form')->name('adres.kaydet');
        Route::get('/sil/{id}', 'AdresBilgilerController@sil')->name('adres.sil');
    });

    Route::get("il", 'AdresBilgilerController@il');
    Route::get("ilce", 'AdresBilgilerController@ilce');
});




Route::group(['prefix' => 'kullanici'], function () {
    Route::get('/oturumac', 'KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac', 'KullaniciController@giris');
    Route::get('/kayitol', 'KullaniciController@kayitol_form')->name('kullanici.kayitol');
    Route::post('/kayitol', 'KullaniciController@kayitol');
    Route::post('/oturumukapat', 'KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
    Route::get('/duzenle/{id}', 'KullaniciController@form')->name('kullanici.duzenle');
    Route::get('/aktiflestir/{anahtar}', 'KullaniciController@aktiflestir')->name('aktiflestir');
});

Route::get('/kullanimkosullarivegizlilik', 'KullanimKosullariveGizlilikController@index')->name('kullanimkosullarivegizlilik');
Route::get('/kargo-teslimat', 'KargoController@index')->name('kargo-teslimat');
Route::get('/sikca-sorulan-sorular', 'SSSController@index')->name('sikca-sorulan-sorular');
Route::get('/odeme-bildirme', 'OdemeBildirmeController@index')->name('odeme-bildirme');
Route::get('/gizlilik-politikasi', 'GizlilikPolitikasiController@index')->name('gizlilik-politikasi');
Route::get('/iptal-iade-degisim', 'IptalIadeDegisimController@index')->name('iptal-iade-degisim');
Route::get('/iletisim', 'IletisimController@index')->name('iletisim');



Route::get('/test/mail', function () {
    $kullanici = \App\Models\Kullanici::find(1);
    return new App\Mail\KullaniciKayitMail($kullanici);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

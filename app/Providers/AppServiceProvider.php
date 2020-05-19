<?php

namespace App\Providers;

use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\Siparis;
use App\Models\Urun;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Contracts\NiteliklerContract;
use App\Repositories\NitelikRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer(['yonetim.*'], function ($view){
           $bitisZamani = now()->addMinutes(1);
           $istatistikler = Cache::remember('istatistikler', $bitisZamani, function () {
              return[
                'bekleyen_siparis' => Siparis::where('durum', 'Siparişiniz Alındı')->count(),
                'tamamlanan_siparis' => Siparis::where('durum', 'Siparişiniz teslim edildi')->count(),
                'toplam_urun' => Urun::count(),
                'toplam_kullanici' => Kullanici::count(),
                'toplam_kategori' => Kategori::count(),
                'toplam_satis' => Siparis::sum('siparis_tutari')
              ];
           });

           $view->with('istatistikler', $istatistikler);
        });

    }
}

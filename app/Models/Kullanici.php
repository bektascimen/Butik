<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{
    use SoftDeletes;
    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
    protected $table = 'kullanici';
    protected $fillable = ['ad', 'soyad', 'email', 'sifre', 'remember_token', 'aktivasyon_anahtari', 'uye_durumu', 'yonetici_mi'];
    protected $hidden = ['sifre', 'aktivasyon_anahtari'];

    public function getAuthPassword()
    {
        return $this->sifre;
    }

    public function adresler()
    {
        return $this->hasMany(Adresler::class, "kullanici_id");
    }

    function fullname()
    {
        return sprintf("%s %s", $this->ad, $this->soyad);
    }

    function begenilen_urunler(){
        return $this->hasMany(BegenilenUrunler::class, 'kullanici_id');
    }
}

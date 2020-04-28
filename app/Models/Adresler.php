<?php

namespace App\Models;

use App\Il;
use App\Ilce;
use Illuminate\Database\Eloquent\Model;

class Adresler extends Model
{

    protected $table = "adresler";

    protected $fillable = [
        "iletisim_adi",
        "kullanici_id",
        "adres_baslik",
        "il_id",
        "ilce_id",
        "satir1",
        "satir2",
        "telefon",
        "ad",
        "soyad",
        "varsayilan",
    ];

    function ilAdi()
    {
        return $this->belongsTo(Il::class, 'il_id');
    }

    function ilceAdi()
    {
        return $this->belongsTo(Ilce::class, 'ilce_id');
    }

    function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id');
    }

}

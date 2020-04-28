<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrunDetay extends Model
{
    protected $table = "urun_detay";

    protected $guarded = [];

    public $timestamps = false;

    public function urun()
    {
        return $this -> belongsTo('App\Models\Urun');
    }

    public function isletmeAdi()
    {
        return $this->belongsTo(Isletme::class, 'isletme_adi');
    }
}

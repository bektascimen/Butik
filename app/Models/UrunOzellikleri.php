<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrunOzellikleri extends Model
{
    protected $table = "urun_ozellikleri";

    public function ozellikDegerAdi()
    {
        return $this->belongsTo(OzellikDegerleri::class, 'ozellik_deger_id');
    }

    public function ozellik()
    {
        return $this->belongsTo(Ozellikler::class, 'ozellik_id');
    }
}

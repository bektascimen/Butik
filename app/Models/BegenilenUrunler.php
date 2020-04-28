<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BegenilenUrunler extends Model
{
    protected $table = 'begenilen_urunler';

    protected $fillable = ['kullanici_id', 'urun_id'];

    public $timestamps = false;

    function urun()
    {
        return $this->belongsTo(Urun::class, 'urun_id')->with('detay');
    }

    function kullanici()
    {
        return $this->belongsTo(Kullanici::class, 'kullanici_id');
    }
}

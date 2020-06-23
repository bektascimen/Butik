<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siparis extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
    protected $table = "siparis";
    protected $fillable = ['sepet_id',
        'siparis_tutari',
        'durum',
        'ad',
        'soyad',
        'telefon',
        'kullanici_id',
        'fatura_adresi',
        'teslimat_adresi',
        'odeme_yontemi',
        'st_no'
    ];

    public function sepet()
    {
        return $this->belongsTo('App\Models\Sepet');
    }

    public function adresler()
    {
        return $this->hasOne(Adresler::class, "kullanici_id")
            ->where("varsayilan", 1)
            ->first();
    }
}

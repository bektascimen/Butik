<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SepetUrun extends Model
{
    use SoftDeletes;

    protected $table = "sepet_urun";

    protected $guarded = [];

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public function urun()
    {
        return $this->belongsTo('App\Models\Urun');
    }

    public function detay()
    {
        return $this->hasOne('App\Models\UrunDetay')->withDefault();
    }

    public function bedenler()
    {
        return $this->hasOne('App\Models\Beden')->withDefault();
    }

    public function renkler()
    {
        return $this->hasOne('App\Models\Renk')->withDefault();
    }
}

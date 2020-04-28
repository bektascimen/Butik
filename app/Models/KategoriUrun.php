<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriUrun extends Model
{
    protected $table = 'kategori_urun';

    protected $fillable = ['kategori_id', 'urun_id'];

    function urun()
    {
        return $this->belongsTo(Urun::class, 'urun_id')
            ->with('detay');
    }
}

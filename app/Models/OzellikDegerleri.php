<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OzellikDegerleri extends Model
{
    protected $table = 'ozellik_degerleri';

    public function ozellikAdi()
    {
        return $this->belongsTo(Ozellikler::class, 'ozellik_id');
    }

}

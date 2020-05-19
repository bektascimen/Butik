<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ozellikler extends Model
{
    protected $table = 'ozellikler';

    protected $fillable = [
        'ozellik_adi',
    ];

    public function degerler()
    {
        return $this->hasMany(OzellikDegerleri::class, "ozellik_id");
    }
}

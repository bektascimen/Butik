<?php

namespace App\Models;

use App\Models\Beden;
use App\Models\Renk;
use Illuminate\Database\Eloquent\Model;

class UrunNitelik extends Model
{
    protected $table = "urun_nitelik";

    public function urun()
    {
        return $this->belongsTo('App\Models\Urun', 'urun_id');
    }

    function bedenAdi()
    {
        return $this->belongsTo(Beden::class, 'beden_id');
    }

    function renkAdi()
    {
        return $this->belongsTo(Renk::class, 'renk_id');
    }
}

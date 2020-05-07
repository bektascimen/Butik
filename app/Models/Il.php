<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Il extends Model
{
    //

    protected $table = 'il';

    protected $fillable = [
        'il_adi',
    ];


    public function ilceler(){
        return $this->hasMany(Ilce::class, "il_id");
    }
}

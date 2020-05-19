<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beden extends Model
{
    protected $table = 'bedenler';

    protected $fillable = [
        'beden',
    ];
}

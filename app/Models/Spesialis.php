<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    protected $guarded = [
        'id',
    ];

    function dokter()
    {
        return $this ->hasMany(Dokter::class,'spesialis_id','id');
    }
}
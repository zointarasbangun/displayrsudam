<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'spesialis_id' => 'integer',
    ];

    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class, 'spesialis_id', 'id');
    }

    function jadwalpraktik()
    {
        return $this ->hasMany(JadwalPraktik::class,'dokter_id','id');
    }

    public function getFotoUrlAttribute()
    {
        return asset('storage/' . $this->foto);
    }
}
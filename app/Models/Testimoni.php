<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    
    /**
     * Nama tabel yang digunakan model ini.
     *
     * @var string
     */
    protected $table = 'testimonials'; // Sesuaikan dengan nama tabel di database Anda
    
    /**
     * Atribut yang dapat diisi.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'rating',
        'message',
        'media_type',
        'image',
        'video_url',
        'photo',
    ];
    
    /**
     * Atribut yang harus dikonversi tipe datanya.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'rating' => 'integer',
    ];
}

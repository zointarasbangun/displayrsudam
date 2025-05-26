<?php

namespace Database\Seeders;

use App\Models\Spesialis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpesialisSeeder extends Seeder
{
    public function run()
    {
        Spesialis::create(['nama_spesialisasi' => 'Penyakit Dalam']);
        Spesialis::create(['nama_spesialisasi' => 'Anak']);
        Spesialis::create(['nama_spesialisasi' => 'Bedah Umum']);
    }
}
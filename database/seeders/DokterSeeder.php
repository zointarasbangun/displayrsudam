<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run()
    {
        Dokter::create([
            'nama_dokter' => 'dr. Budi',
            'tipe_dokter' => 'umum',
            'foto' => 'default.jpg',
            'status' => 'aktif',
            'spesialis_id' => null,
        ]);

        Dokter::create([
            'nama_dokter' => 'dr. Siti',
            'tipe_dokter' => 'spesialis',
            'foto' => 'default.jpg',
            'status' => 'aktif',
            'spesialis_id' => 1,
        ]);
    }
}

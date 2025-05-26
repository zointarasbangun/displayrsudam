<?php

namespace Database\Seeders;

use App\Models\JadwalPraktik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPraktikSeeder extends Seeder
{
    public function run()
    {
        JadwalPraktik::create([
            'dokter_id' => 1,
            'hari' => 'Senin',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '12:00:00',
        ]);
    }
}

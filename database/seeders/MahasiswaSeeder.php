<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Mahasiswa::create([
            'nama' => 'Aulia Zulfa',
            'nim' => '2100187',
            'program_studis_id' => 1,
        ]);
         Mahasiswa::create([
            'nama' => 'Andini Kusuma',
            'nim' => '2100113',
            'program_studis_id' => 2,
        ]);
         Mahasiswa::create([
            'nama' => 'Muhammad Zulfikar',
            'nim' => '2101232',
            'program_studis_id' => 3,
        ]);
         Mahasiswa::create([
            'nama' => 'Ryan Arsalan',
            'nim' => '2101413',
            'program_studis_id' => 3,
        ]);
         Mahasiswa::create([
            'nama' => 'Aprilia Fadhila',
            'nim' => '2106701',
            'program_studis_id' => 2,
        ]);
         Mahasiswa::create([
            'nama' => 'Kaylla Wiranti',
            'nim' => '2100891',
            'program_studis_id' => 1,
        ]);
    }
}

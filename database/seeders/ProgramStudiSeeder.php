<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramStudi::create([
            'nama' => 'Teknik Informatika',
            'kaprodi' => 'Muhammad Nursalman S.Kom',
            'fakultas_id' => 1,
        ]);

        ProgramStudi::create([
            'nama' => 'Fisika',
            'kaprodi' => 'Rani Megasari S.Si.',
            'fakultas_id' => 2,
        ]);

        ProgramStudi::create([
            'nama' => 'Teknik Mesin',
            'kaprodi' => 'Asep Wahyudi S.T.',
            'fakultas_id' => 1,
        ]);
    }
}

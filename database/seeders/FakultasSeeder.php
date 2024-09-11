<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::create([
            'nama' => 'Fakultas Teknik',
            'dekan' => 'Dr. Mulyadi Suparman S.Si',
        ]);

        Fakultas::create([
            'nama' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'dekan' => 'Prof. Dr. Dedi Satria, M.Si.',
        ]);
        
        Fakultas::create([
            'nama' => 'Fakultas Kedokteran',
            'dekan' => 'Dr. Rina Prihatini, SpOG.',
        ]);
        
        Fakultas::create([
            'nama' => 'Fakultas Ekonomi dan Bisnis',
            'dekan' => 'Prof. Dr. Bambang Sudibyo, M.Ec.',
        ]);

        Fakultas::create([
            'nama' => 'Fakultas Hukum',
            'dekan' => 'Dr. Sigit Riyanto, S.H., LL.M.',
        ]);

        Fakultas::create([
            'nama' => 'Fakultas Teknik',
            'dekan' => 'Prof. Ir. Hendro Wibowo, Ph.D.',
        ]);

        Fakultas::create([
            'nama' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
            'dekan' => 'Dr. Rachmat Hidayat, M.A.',
        ]);


        Fakultas::create([
            'nama' => 'Fakultas Seni dan Desain',
            'dekan' => 'Prof. Rini Lestari, M.Sn.',
        ]);

    }
}

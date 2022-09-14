<?php

use App\Desa;
use App\Struktural;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Desa::create([
            'nama_desa' => 'Barengkok',
            'visi' => 'VISI DARI BARENGKOK',
            'misi' => 'MISI DARI BARENGKOK'
        ]);
        Desa::create([
            'nama_desa' => 'Cibeber I',
            'visi' => 'VISI DARI Cibeber I',
            'misi' => 'MISI DARI Cibeber I'
        ]);
        Desa::create([
            'nama_desa' => 'Cibeber II',
            'visi' => 'VISI DARI BARENGKOK',
            'misi' => 'MISI DARI BARENGKOK'
        ]);
        Desa::create([
            'nama_desa' => 'Karyasari',
            'visi' => 'VISI DARI BARENGKOK',
            'misi' => 'MISI DARI BARENGKOK'
        ]);

        Struktural::create([
            'desa_id' => '2',
            'nama' => 'Andika',
            'jabatan' => 'Teuing'
        ]);
        Struktural::create([
            'desa_id' => '1',
            'nama' => 'Opik',
            'jabatan' => 'Kepala Desa'
        ]);
    }
}

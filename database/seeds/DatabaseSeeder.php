<?php

use App\Desa;
use App\User;
use App\Struktural;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Sipida',
            'email' => 'adminsipida@gmail.com',
            'password' => Hash::make('sipida2022')
        ]);

        Desa::create([
            'nama_desa' => 'Barengkok',
            'visi' => 'VISI DARI BARENGKOK',
            'misi' => 'MISI DARI BARENGKOK',
            'lokasi' => 'Barengkok'
        ]);
        Desa::create([
            'nama_desa' => 'Cibeber I',
            'visi' => 'VISI DARI Cibeber I',
            'misi' => 'MISI DARI Cibeber I',
            'lokasi' => 'Cibeber-I'
        ]);
        Desa::create([
            'nama_desa' => 'Cibeber II',
            'visi' => 'VISI DARI Cibeber II',
            'misi' => 'MISI DARI Cibeber II',
            'lokasi' => 'Cibeber-II'
        ]);
        Desa::create([
            'nama_desa' => 'Karacak',
            'visi' => 'VISI DARI Karacak',
            'misi' => 'MISI DARI Karacak',
            'lokasi' => 'Karacak'
        ]);
        Desa::create([
            'nama_desa' => 'Karehkel',
            'visi' => 'VISI DARI Karehkel',
            'misi' => 'MISI DARI Karehkel',
            'lokasi' => 'Karehkel'
        ]);
        Desa::create([
            'nama_desa' => 'Karyasari',
            'visi' => 'VISI DARI Karyasari',
            'misi' => 'MISI DARI Karyasari',
            'lokasi' => 'Karyasari'
        ]);
        Desa::create([
            'nama_desa' => 'Leuwiliang',
            'visi' => 'VISI DARI Leuwiliang',
            'misi' => 'MISI DARI Leuwiliang',
            'lokasi' => 'Leuwiliang'
        ]);
        Desa::create([
            'nama_desa' => 'Leuwimekar',
            'visi' => 'VISI DARI Leuwimekar',
            'misi' => 'MISI DARI Leuwimekar',
            'lokasi' => 'Leuwimekar'
        ]);
        Desa::create([
            'nama_desa' => 'Pabangbon',
            'visi' => 'VISI DARI PABANGBON',
            'misi' => 'MISI DARI PABANGBON',
            'lokasi' => 'Pabangbon'
        ]);
        Desa::create([
            'nama_desa' => 'Puraseda',
            'visi' => 'VISI DARI PURASEDA',
            'misi' => 'MISI DARI PURASEDA',
            'lokasi' => 'Puraseda'
        ]);
        Desa::create([
            'nama_desa' => 'Purasari',
            'visi' => 'VISI DARI PURASARI',
            'misi' => 'MISI DARI PURASARI',
            'lokasi' => 'Purasari'
        ]);


        Struktural::create([
            'desa_id' => '2',
            'nama' => 'Andika',
            'nip' => '21',
            'jabatan' => 'Teuing'
        ]);
        Struktural::create([
            'desa_id' => '1',
            'nama' => 'Opik',
            'nip' => '11',
            'jabatan' => 'Pimpinan Desa'
        ]);
        Struktural::create([
            'desa_id' => '1',
            'nama' => 'Fadil',
            'nip' => '12',
            'jabatan' => 'Sekretaris Desa'
        ]);
    }
}

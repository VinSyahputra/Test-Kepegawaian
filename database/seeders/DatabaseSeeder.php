<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JabatanPegawai;
use App\Models\Pegawai;
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
        // Pegawai::factory(10)->create();

        JabatanPegawai::create([
            'nama' => 'HRD',
        ]);
        JabatanPegawai::create([
            'nama' => 'Manager',
        ]);
        JabatanPegawai::create([
            'nama' => 'CTO',
        ]);
        JabatanPegawai::create([
            'nama' => 'Staff',
        ]);
    }
}

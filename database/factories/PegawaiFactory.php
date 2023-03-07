<?php

namespace Database\Factories;

use App\Models\JabatanPegawai;
use App\Models\Kontrak;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'username' => fake()->name(),
            'password' => bcrypt('123456'), // password
            'jabatan_pegawais_id' => JabatanPegawai::all()->random()->id,
            'kontraks_id' => Kontrak::all()->random()->id,
        ];
    }
}

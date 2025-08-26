<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Seeder;

class Pengaturan_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::create(
            [
                'logo' => 'logo.png',
                'nama' => 'Sindangpano',
                'alamat' => 'Jl. Sindangpano No. 1',
                'no_telp' => '08123456789',
                'email' => 'info@sindangpano.com'
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Seeder;

class Umkm_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Umkm::create([
            'nama_umkm' => 'Roti Bakar',
            'alamat'    => 'Jl. Sindangpano No. 10, Majalengka',
            'kontak'    => '081234567890',
            'gambar'    => 'roti-1.jpeg',
        ]);

        Umkm::create([
            'nama_umkm' => 'Kerajinan Rotan',
            'alamat'    => 'Dusun Rotan, Sindangpano',
            'kontak'    => '081234567891',
            'gambar'    => 'rotan-1.jpeg',
        ]);

        Umkm::create([
            'nama_umkm' => 'Emping Melinjo',
            'alamat'    => 'Jl. Melinjo No. 5, Sindangpano',
            'kontak'    => '081234567892',
            'gambar'    => 'melinjo-1.jpeg',
        ]);

        Umkm::create([
            'nama_umkm' => 'Keripik Gadung',
            'alamat'    => 'Dusun Gadung, Sindangpano',
            'kontak'    => '081234567893',
            'gambar'    => 'gadung-1.jpeg',
        ]);
    }
}

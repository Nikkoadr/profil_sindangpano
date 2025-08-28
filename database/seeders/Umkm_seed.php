<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Umkm;

class Umkm_seed extends Seeder
{
    public function run()
    {
        Umkm::create([
            'nama_umkm' => 'Emping Melinjo Hafilah',
            'alamat' => 'Jl. Raya Sindangpano No.12',
            'kontak' => '081234567890',
            'gambar' => 'umkm-1.jpeg',
            'produk' => 'Emping Melinjo',
            'deskripsi' => 'Emping melinjo gurih dan renyah khas Sindangpano, cocok untuk camilan maupun oleh-oleh.',
        ]);

        Umkm::create([
            'nama_umkm' => 'Snack Ibu Iroh',
            'alamat' => 'Dusun Karanganyar, Sindangpano',
            'kontak' => '081298765432',
            'gambar' => 'umkm-2.jpeg',
            'produk' => 'Keripik Pisang',
            'deskripsi' => 'Keripik pisang manis dan asin, dibuat dari pisang pilihan hasil kebun lokal.',
        ]);

        Umkm::create([
            'nama_umkm' => 'Warung Kopi Pak Darto',
            'alamat' => 'Pasar Sindangpano',
            'kontak' => '085212345678',
            'gambar' => 'umkm-3.jpeg',
            'produk' => 'Kopi Tubruk & Gorengan',
            'deskripsi' => 'Tempat nongkrong sederhana dengan sajian kopi tubruk khas desa.',
        ]);

        Umkm::create([
            'nama_umkm' => 'Batik Tulis Mbak Rini',
            'alamat' => 'RT 02 RW 03 Sindangpano',
            'kontak' => '087812345678',
            'gambar' => 'umkm-4.jpeg',
            'produk' => 'Batik Tulis',
            'deskripsi' => 'Batik tulis dengan motif khas pedesaan yang unik dan elegan.',
        ]);

        Umkm::create([
            'nama_umkm' => 'Toko Roti Pak Joko',
            'alamat' => 'Jl. Desa Sindangpano No.45',
            'kontak' => '081356789012',
            'gambar' => 'umkm-5.jpeg',
            'produk' => 'Roti Manis',
            'deskripsi' => 'Roti manis berbagai rasa, dibuat setiap hari sehingga selalu fresh.',
        ]);

        Umkm::create([
            'nama_umkm' => 'Kerajinan Anyaman Bu Tini',
            'alamat' => 'RT 01 RW 01 Sindangpano',
            'kontak' => '082112233445',
            'gambar' => 'umkm-6.jpeg',
            'produk' => 'Anyaman Bambu',
            'deskripsi' => 'Produk anyaman bambu ramah lingkungan seperti bakul, tampah, dan tikar.',
        ]);

        Umkm::create([
            'nama_umkm' => 'Olahan Ikan Mas Pak Udin',
            'alamat' => 'Kolam Ikan Desa Sindangpano',
            'kontak' => '085678912345',
            'gambar' => 'umkm-7.jpeg',
            'produk' => 'Ikan Mas Asap',
            'deskripsi' => 'Ikan mas asap khas desa dengan rasa gurih dan lezat.',
        ]);
    }
}

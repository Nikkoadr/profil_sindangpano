<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Seeder;

class Wisata_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wisata::create([
            'nama' => 'Sawah Panenjoan',
            'deskripsi' => 'Nikmati keindahan hamparan sawah hijau dengan latar pegunungan yang menyejukkan mata. Tempat ini cocok untuk bersantai sambil menikmati suasana pedesaan yang asri serta menjadi spot favorit untuk berfoto.',
            'gambar' => 'wisata-1.jpeg',
        ]);

        Wisata::create([
            'nama' => 'Bendungan Sindangpano',
            'deskripsi' => 'Bendungan ini tidak hanya berfungsi sebagai sumber irigasi, tetapi juga menjadi daya tarik wisata dengan panorama air yang tenang dikelilingi pepohonan rindang. Pengunjung dapat menikmati suasana alami sekaligus bersantai bersama keluarga.',
            'gambar' => 'wisata-2.jpeg',
        ]);

        Wisata::create([
            'nama' => 'Waduk Sindangpano',
            'deskripsi' => 'Objek wisata air yang menjadi pusat aktivitas warga sekaligus tempat rekreasi menarik. Pengunjung bisa menikmati pemandangan waduk, memancing, atau sekadar duduk santai menikmati semilir angin di tepi waduk.',
            'gambar' => 'wisata-3.jpeg',
        ]);

        Wisata::create([
            'nama' => 'Cipeundeuy Endah',
            'deskripsi' => 'Destinasi wisata alam yang populer dengan berbagai aktivitas seru seperti rafting, tubing, hingga glamping/villa. Cocok untuk pecinta petualangan maupun keluarga yang ingin menikmati liburan.',
            'gambar' => 'wisata-4.jpeg',
        ]);
    }
}

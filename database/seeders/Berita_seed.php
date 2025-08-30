<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Berita;

class Berita_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Peringatan HUT RI ke-80',
                'isi' => 'Kegiatan upacara dan perlombaan dalam rangka memperingati Hari Kemerdekaan Republik Indonesia yang ke-80.',
                'gambar' => null,
                'penulis' => 'Admin Desa',
            ],
            [
                'judul' => 'Kerja Bakti Bersih Desa',
                'isi' => 'Masyarakat bergotong royong membersihkan lingkungan desa untuk menjaga kebersihan dan kesehatan.',
                'gambar' => null,
                'penulis' => 'Admin Desa',
            ],
            [
                'judul' => 'Launching Produk BUMDes',
                'isi' => 'BUMDes resmi meluncurkan produk baru untuk mendukung perekonomian masyarakat desa.',
                'gambar' => null,
                'penulis' => 'Admin Desa',
            ],
            [
                'judul' => 'Pendaftaran BLT Dana Desa',
                'isi' => 'Pemerintah desa membuka pendaftaran Bantuan Langsung Tunai dari Dana Desa bagi masyarakat yang berhak.',
                'gambar' => null,
                'penulis' => 'Admin Desa',
            ],
            [
                'judul' => 'Pelatihan Digital UMKM',
                'isi' => 'Pelaku UMKM desa mengikuti pelatihan digitalisasi untuk meningkatkan pemasaran produk.',
                'gambar' => null,
                'penulis' => 'Admin Desa',
            ],
            [
                'judul' => 'Kegiatan Masyarakat',
                'isi' => 'Rangkaian kegiatan sosial dan budaya yang diikuti oleh warga desa.',
                'gambar' => null,
                'penulis' => 'Admin Desa',
            ],
            [
                'judul' => 'Musyawarah Desa Tahunan',
                'isi' => 'Pemerintah desa bersama masyarakat melaksanakan musyawarah untuk membahas program kerja tahun depan.',
                'gambar' => null, // contoh tanpa gambar
                'penulis' => 'Admin Desa',
            ],
        ];

        foreach ($data as $item) {
            Berita::create([
                'judul' => $item['judul'],
                'slug' => Str::slug($item['judul']),
                'isi' => $item['isi'],
                'gambar' => $item['gambar'],
                'penulis' => $item['penulis'],
            ]);
        }
    }
}

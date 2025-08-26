<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            User_seed::class,
            Pengaturan_seed::class,
            Wisata_seed::class,
            Umkm_seed::class,
        ]);
    }
}

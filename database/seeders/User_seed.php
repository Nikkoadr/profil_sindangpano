<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Administrator',
                'email' => 'admin@sindangpano.com',
                'password' => Hash::make('1234567800')
            ]
        );
    }
}

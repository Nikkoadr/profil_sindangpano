<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::created(
            [
                'name' => 'Administrator',
                'email' => 'nikkoadrian02@gmail.com',
                'password' => Hash::make('1234567800')
            ]
            );
    }
}

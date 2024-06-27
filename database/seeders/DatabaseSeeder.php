<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Axel',
            'email' => 'axel@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'penjual',
            'is_active' => true,
        ]);

        User::create([
            'username' => 'Paulo',
            'email' => 'paulo@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'pembeli',
            'is_active' => true,
        ]);

        User::create([
            'username' => 'AdminParis',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'admin',
            'is_active' => true,
        ]);
    }
}

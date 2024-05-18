<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'user_type' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'user_type' => 'user',
                'password' => bcrypt('password'),
            ]
        ]);
    }
}

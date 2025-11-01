<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Md. Aminour Islam',
            'email' => 'rasel@example.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

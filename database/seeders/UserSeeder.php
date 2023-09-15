<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'username'  => 'Admin',
            'password'  => Hash::make('Admin'),
            'role'      => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
// php artisan db:seed --class=UserSeeder

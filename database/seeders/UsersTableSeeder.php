<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Insert users with different roles
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@pps.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Salesperson User',
                'email' => 'salesperson@pps.com',
                'password' => Hash::make('12345678')
            ],
        ]);
    }
}

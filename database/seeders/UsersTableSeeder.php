<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Assuming the roles are already seeded
        $adminRoleId = DB::table('roles')->where('name', 'Admin')->value('id');
        $salespersonRoleId = DB::table('roles')->where('name', 'Salesperson')->value('id');

        // Insert users with different roles
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@pps.com',
                'password' => Hash::make('12345678'),
                'role_id' => $adminRoleId
            ],
            [
                'name' => 'Salesperson User',
                'email' => 'salesperson@pps.com',
                'password' => Hash::make('12345678'),
                'role_id' => $salespersonRoleId
            ],
        ]);
    }
}

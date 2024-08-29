<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Salesperson'],
            ['name' => 'Customer Support'],
            ['name' => 'Studio'],
            ['name' => 'Sales'],
        ]);
    }
}

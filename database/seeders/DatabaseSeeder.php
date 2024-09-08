<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call role and user seeders here
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}

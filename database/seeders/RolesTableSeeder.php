<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = ['Admin', 'Salesperson', 'Customer Support', 'Studio', 'Sales'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Ensure roles exist in the roles table
        $roles = Role::all();

        // If no roles are present, stop the seeding
        if ($roles->isEmpty()) {
            $this->command->info('No roles found, please seed roles first.');
            return;
        }

        // Create users and assign random role_id
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password123'),
                'role_id' => $roles->where('name', 'Admin')->first()->id, // Assign Admin role
            ],
            [
                'name' => 'Salesperson User',
                'email' => 'salesperson@example.com',
                'password' => bcrypt('password123'),
                'role_id' => $roles->where('name', 'Salesperson')->first()->id, // Assign Salesperson role
            ],
            [
                'name' => 'Customer Support User',
                'email' => 'support@example.com',
                'password' => bcrypt('password123'),
                'role_id' => $roles->where('name', 'Customer Support')->first()->id, // Assign Customer Support role
            ],
            [
                'name' => 'Studio User',
                'email' => 'studio@example.com',
                'password' => bcrypt('password123'),
                'role_id' => $roles->where('name', 'Studio')->first()->id, // Assign Studio role
            ],
            [
                'name' => 'Sales User',
                'email' => 'sales@example.com',
                'password' => bcrypt('password123'),
                'role_id' => $roles->where('name', 'Sales')->first()->id, // Assign Sales role
            ],
        ];

        // Insert users into the database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}

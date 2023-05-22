<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'rol' => 'Guest',
            'description' => 'Guest',
        ]);

        Role::create([
            'rol' => 'Loaders',
            'description' => 'Loaders',
        ]);

        Role::create([
            'rol' => 'Admin',
            'description' => 'Admin',
        ]);

        Role::create([
            'rol' => 'Users',
            'description' => 'Users',
        ]);

    }
}
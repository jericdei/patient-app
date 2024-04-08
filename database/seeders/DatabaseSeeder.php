<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ])->assignRole('admin');

        // Create dummy patients
        Patient::factory(20)->create();
    }
}

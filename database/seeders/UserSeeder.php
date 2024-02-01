<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'bio' => fake()->paragraph(),
            'phone' => '082556987451',
            'role' => 'superadmin',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'bio' => fake()->paragraph(),
            'phone' => '081245699523',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
    }
}

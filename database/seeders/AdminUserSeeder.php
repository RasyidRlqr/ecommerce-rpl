<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('smkmuhi'), 
                'role' => 'admin',
            ]
        );
         User::updateOrCreate(
            ['email' => 'admin2@example.com'],
            [
                'name' => 'Admin2',
                'password' => Hash::make('smkmuhi2'), 
                'role' => 'admin',
            ]
        );
    }
}

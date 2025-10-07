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
        // User dengan role 'user'
        User::updateOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'User',
                'password' => Hash::make('usersmk'), 
                'role' => 'user',
            ]
        );

        // User baru dengan role 'admin'
        User::updateOrCreate(
            ['email' => 'user2@example.com'],
            [
                'name' => 'User2',
                'password' => Hash::make('user2smk'), 
                'role' => 'user',
            ]
        );
        User::updateOrCreate(
            ['email' => 'user3@example.com'],
            [
                'name' => 'User3',
                'password' => Hash::make('user3smk'), 
                'role' => 'user',
            ]
        );
        User::updateOrCreate(
            ['email' => 'user2=4@example.com'],
            [
                'name' => 'User4',
                'password' => Hash::make('user4smk'), 
                'role' => 'user',
            ]
        );
    }
}
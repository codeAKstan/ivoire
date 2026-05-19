<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@ivoirelegal.com'],
            [
                'name' => 'Ivoire Admin',
                'password' => Hash::make('password123'), // USER: Change this immediately after login
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}

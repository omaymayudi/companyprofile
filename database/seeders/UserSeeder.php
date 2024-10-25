<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a single user
        User::create([
            'name' => 'KRTG INDONESIA',
            'username' => 'krtgindonesia',
            'password' => Hash::make('123456789'), // Password hashing for security
        ]);
    }
}

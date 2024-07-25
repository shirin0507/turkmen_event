<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Begench Maksatmyradov',
            'email' => 'begench@example.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Ayperi Abalakova',
            'email' => 'Ayperi@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

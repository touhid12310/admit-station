<?php

namespace Database\Seeders;

use App\Models\Institute;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('323232'),
            'user_type' => 'student',
            'photo' => 'assets/images/profile.png',
            'cover_photo' => 'assets/images/cover.jpg',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'institute@example.com',
            'password' => Hash::make('323232'),
            'user_type' => 'institute',
            'photo' => 'assets/images/institute.jpg',
            'cover_photo' => 'assets/images/institute-cover.jpg',
        ]);


        Institute::factory(10)->create();
    }
}

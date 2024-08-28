<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
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
            'photo' => 'uploads/Users/3P4tKc093OAVVmenX0FQymjRzirc4azCqflZjv5M.jpg',
            'cover_photo' => 'uploads/Users/1kPncNPYihMTKkzbvaAiiF7ZrdeEPYkWEdV9AELI.jpg',
        ]);


        Vendor::factory(10)->create();
    }
}

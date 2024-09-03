<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
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
            'photo' => 'assets/images/profile.webp',
            'cover_photo' => 'assets/images/cover.jpg',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'institute@example.com',
            'password' => Hash::make('323232'),
            'user_type' => 'institute',
            'photo' => 'assets/images/institute.webp',
            'cover_photo' => 'assets/images/cover.jpg',
        ]);


        Institute::factory(10)->create();
         
        BlogCategory::factory()->count(3)->sequence(
            ['name' => 'University'],
            ['name' => 'School'],
            ['name' => 'College']
        )->create();
    }
}

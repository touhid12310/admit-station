<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institute>
 */
class InstituteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'institute_type' => fake()->randomElement(['School', 'College', 'University']),
            'slug'           => fake()->slug(),	
            'name'           => fake()->company(),
            'EIIN'           => fake()->unique()->randomNumber(),
            'description'    => fake()->paragraph(100),
            'E_year'         => fake()->year(),
            'country_code'   => fake()->randomElement(['+1', '+44', '+61', '+91', '+81']),
            'mobile_no'      => fake()->unique()->phoneNumber(),
            'email'          => fake()->unique()->safeEmail(),
            'country'        => fake()->unique()->country(),
            'city'           => fake()->unique()->city(),
            'address'        => fake()->unique()->address(),
            'logo'           => 'assets/images/instute-logo.jpg',
            'thumb_img'      => fake()->randomElement(['assets/images/hero/hero-image-1.jpg', 'assets/images/hero/hero-image-2.jpg','assets/images/hero/hero-image-3.jpg']),
            'vendors_types'  => fake()->randomElement(['School', 'College', 'University']),
            'app_status'     => fake()->randomElement(['Pending', 'Approved', 'Cancel']),
        ];
    }
}

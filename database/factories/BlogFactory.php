<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'             => $this->faker->unique()->sentence(),
            'blog_category_id'  => $this->faker->randomElement(['1','2','3']),
            'slug'              => $this->faker->unique()->slug(),	
            'image'             => $this->faker->randomElement([
                                'assets/images/blog/blog-thumb-1.jpg',
                                'assets/images/blog/blog-thumb-2.jpg',
                            ]),
            'description'       => $this->faker->paragraphs(20, true),
            'status'            => 'Approved',
        ];
    }
}

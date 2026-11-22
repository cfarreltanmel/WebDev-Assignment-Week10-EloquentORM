<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
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
            'pageTitle' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'cardTitle' => fake()->sentence(),
            'cardDescription' => fake()->paragraph(),
            'buttonTitle' => fake()->sentence(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Home>
 */
class HomeFactory extends Factory
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
            'image' => fake()->imageUrl(),
            'cardTitle' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'buttonTitle' => fake()->sentence(),
        ];
    }
}

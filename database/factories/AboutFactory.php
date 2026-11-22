<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<About>
 */
class AboutFactory extends Factory
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
            'academicBackground' => fake()->paragraph(),
        ];
    }
}

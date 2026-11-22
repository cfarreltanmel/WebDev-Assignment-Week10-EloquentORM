<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'mailContent' => fake()->paragraph(),
        ];
    }
}

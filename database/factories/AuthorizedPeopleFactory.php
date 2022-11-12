<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorizedPeople>
 */
class AuthorizedPeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'position' => fake()->jobTitle(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'image' => fake()->imageUrl($width = 640, $height = 480),
        ];
    }
}

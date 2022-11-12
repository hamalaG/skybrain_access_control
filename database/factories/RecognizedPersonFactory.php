<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\AuthorizedPeople;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecognizedPerson>
 */
class RecognizedPersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'staff_id' => AuthorizedPeople::all()->random()->id,
            'name' => AuthorizedPeople::all()->random()->first_name,
            'time' => fake()->time(),
            'image' => fake()->imageUrl($width = 640, $height = 480),
        ];
    }
}

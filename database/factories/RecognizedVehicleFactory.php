<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\AuthorizedVehicles;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecognizedVehicle>
 */
class RecognizedVehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vehicle_id' => AuthorizedVehicles::all()->random()->id,
            'plate_number' => AuthorizedVehicles::all()->random()->plate_number,
            'time' => fake()->time(),
            'owner' => AuthorizedVehicles::all()->random()->vehicle_owner,
        ];
    }
}

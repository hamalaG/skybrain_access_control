<?php

namespace Database\Factories;

use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorizedVehicles>
 */
class AuthorizedVehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        return [
            'plate_number' => $this->faker->vehicleRegistration(),
            'vehicle_type' => $this->faker->vehicleType(),
            'vehicle_model' => $this->faker->vehicleModel(),
            'vehicle_owner' => fake()->name(),
        ];
    }
}

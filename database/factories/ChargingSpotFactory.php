<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChargingSpotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;

        return [
            'identifier' => $faker->bothify('HR-####'),
            'address' => $faker->streetAddress(),
            'owner' => $faker->company(),
            'built_at' => now()
        ];
    }
}

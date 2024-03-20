<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;



class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;
        $city = [
            'Zagreb', 
            'Split', 
            'Rijeka', 
            'Osijek',
            'Zadar',
            'Kaštel Stari',
            'Vrbovec',
            'Ivanić-Grad',
            'Trogir'
        ];

        return [
            'name' => $faker->company(),
            'address' => $faker->streetAddress(),
            'city' => $faker->randomElement($city),
        ];
    }
}

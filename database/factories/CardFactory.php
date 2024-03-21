<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Card;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{

    protected $model = Card::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;
        $allowedAmounts =  [50, 160, 320];

        return [
            'slug' => $faker->bothify('?###?##?###'),
            'pin' => $faker->randomNumber(4, true),
            'amount' => $amount = $faker->randomElement($allowedAmounts),
            'amount_left' => $faker->randomFloat(1, 0.1 * $amount, 0.9 * $amount),
            'created_at' => Carbon::yesterday(),
            'activated_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
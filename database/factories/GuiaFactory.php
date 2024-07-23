<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guia>
 */
class GuiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "n_guia" => fake()->randomNumber(5, true),
            "monto" => fake()->randomFloat(2),
            "customer_id" => Customer::inRandomOrder()->first()->id
        ];
    }
}

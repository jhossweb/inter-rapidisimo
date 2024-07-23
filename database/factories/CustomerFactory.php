<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "documentId" => fake()->randomNumber(6, false),
            "name" => fake()->name(),
            "last_name" => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            "is_active" => fake()->boolean(),
            "user_id" => User::factory()
        ];
    }
}

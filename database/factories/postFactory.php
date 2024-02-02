<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(15),
            'content' => fake()->text(50),
            'user_id' => fake()->randomNumber(2),
            'product_id' => fake()->randomNumber(1),//change to 0-max in product list??
            'product_type' => fake()->randomElement(['mice','keyboards','headsets','bundles']),
        ];
    }
}

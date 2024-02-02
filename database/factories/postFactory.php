<?php

namespace Database\Factories;

use App\Models\User;
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
            'content' => fake()->sentence(),
            'user_id' => User::all()->random()->id,
            'product_id' => fake()->numberBetween(1,5),//change to 0-max in product list??
            'product_type' => fake()->randomElement(['mice','keyboards','headsets','bundles']),
        ];
    }
}



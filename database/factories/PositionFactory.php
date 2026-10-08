<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'name' => fake()->unique()->randomElement(['Staff', 'Senior Staff', 'Supervisor', 'Manager', 'Head']),
        'level' => fake()->numberBetween(1, 5),
        'description' => fake()->sentence(),
        'is_active' => true,
    ];
}
}

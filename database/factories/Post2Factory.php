<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post2>
 */
class Post2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => '',
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'category2_id' => rand(1, 6)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bbs>
 */
class BbsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(20),
            'title' => $this->faker->realText(50),
            'body' => $this->faker->realText(200),
            'thread_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}

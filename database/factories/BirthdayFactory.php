<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Birthday>
 */
class BirthdayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'birth_date' => $this->faker->date('d.m.Y'),
            'date' => $this->faker->date('d.m'),
            'present-idea' => fake()->word,
            'user_id' => 1,
            'relationship' => 'family'
        ];
    }
}

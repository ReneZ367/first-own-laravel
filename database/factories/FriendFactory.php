<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Friend>
 */
class FriendFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => fake()->name(),
            'user_friend_id' => fake()->numberBetween(100000, 999999),
            'friend_name' => fake()->name(),
            'friend_id' => fake()->numberBetween(100000, 999999),
            'friend_user_id' => '2',
            'accepted' => fake()->numberBetween(0, 1),
        ];
    }
}

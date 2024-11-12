<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rene Zehl',
            'email' => 'test1@gmx.de',
            'email_verified_at' => now(),
            'password' => 1111111,
            'friend_id' => 111111,
        ]);

        User::factory()->create([
            'name' => 'Alexandra Kondratyuk',
            'email' => 'test2@gmx.de',
            'email_verified_at' => now(),
            'password' => 1111111,
            'friend_id' => 222222,
        ]);

        User::factory()->create([
            'name' => 'kevin Soika',
            'email' => 'test3@gmx.de',
            'email_verified_at' => now(),
            'password' => 1111111,
            'friend_id' => 333333,
        ]);
    }
}

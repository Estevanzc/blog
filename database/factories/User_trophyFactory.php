<?php

namespace Database\Factories;

use App\Models\Trophy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_trophy>
 */
class User_trophyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder()->value("id"),
            "trophy_id" => Trophy::inRandomOrder()->value("id"),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            "title" => fake()->sentence(2),
            "subtitle" => fake()->sentence(),
            "description" => fake()->paragraph(2),
            "user_id" => User::inRandomOrder()->value("id"),
            "category_id" => Category::inRandomOrder()->value("id"),
        ];
    }
}

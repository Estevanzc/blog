<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(2),
            "subtitle" => fake()->sentence(),
            "content" => fake()->paragraph(2),
            "blog_id" => Blog::inRandomOrder()->value("id"),
            "category_id" => Category::inRandomOrder()->value("id"),
        ];
    }
}

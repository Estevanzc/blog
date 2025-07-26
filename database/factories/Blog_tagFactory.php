<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog_tag>
 */
class Blog_tagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "tag_id" => Tag::inRandomOrder()->value("id"),
            "blog_id" => Blog::inRandomOrder()->value("id"),
        ];
    }
}

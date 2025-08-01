<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table("trophies")->insert([
            [
                'name' => 'Blog Owner',
                'level' => 1,
                "description" => "Have its own blog",
                "type" => "Blog"
            ],

            // Contributor to blogs
            [
                'name' => 'Beginner Contributor',
                'level' => 1,
                "description" => "First colaboration with a blog",
                "type" => "Blog"
            ],
            [
                'name' => 'Active Collaborator',
                'level' => 2,
                "description" => "Colaborate with 10 blogs",
                "type" => "Blog"
            ],
            [
                'name' => 'Dedicated Collaborator',
                'level' => 3,
                "description" => "Colaborate with 100 blogs",
                "type" => "Blog"
            ],
            [
                'name' => 'Full-time Employee',
                'level' => 4,
                "description" => "Colaborate with 500 blogs",
                "type" => "Blog"
            ],

            // Likes on posts
            [
                'name' => 'Liked Level 1',
                'level' => 1,
                "description" => "Liked a post for the first time",
                "type" => "Like"
            ],
            [
                'name' => 'Liked Level 2',
                'level' => 2,
                "description" => "Liked 10 posts",
                "type" => "Like"
            ],
            [
                'name' => 'Liked Level 3',
                'level' => 3,
                "description" => "Liked 100 posts",
                "type" => "Like"
            ],
            [
                'name' => 'Liked Level 4',
                'level' => 4,
                "description" => "Liked 500 posts",
                "type" => "Like"
            ],
            [
                'name' => 'Liked Level 5',
                'level' => 5,
                "description" => "Liked 1000 posts",
                "type" => "Like"
            ],

            // Comments written
            [
                'name' => 'Beginner Commentator',
                'level' => 1,
                "description" => "Commented for the first time",
                "type" => "Comment"
            ],
            [
                'name' => 'Opinion Maker',
                'level' => 2,
                "description" => "Commented in 10 posts",
                "type" => "Comment"
            ],
            [
                'name' => 'Experienced Opinionist',
                'level' => 3,
                "description" => "Commented in 100 posts",
                "type" => "Comment"
            ],
            [
                'name' => 'Writer',
                'level' => 4,
                "description" => "Commented in 500 posts",
                "type" => "Comment"
            ],
            [
                'name' => 'Touch grass, my guy',
                'level' => 5,
                "description" => "Commented in 1000 posts",
                "type" => "Comment"
            ],

            // Posts written
            [
                'name' => 'Beginner Writer',
                'level' => 1,
                "description" => "Posted for the first time",
                "type" => "Post"
            ],
            [
                'name' => 'Writing Hobby',
                'level' => 2,
                "description" => "Posted 10 times",
                "type" => "Post"
            ],
            [
                'name' => 'Addicted to Writing',
                'level' => 3,
                "description" => "Posted 100 times",
                "type" => "Post"
            ],
            [
                'name' => 'News Announcer',
                'level' => 4,
                "description" => "Posted 500 times",
                "type" => "Post"
            ],
            [
                'name' => "The Psalmist Missed This",
                'level' => 5,
                "description" => "Posted 1000 times",
                "type" => "Post"
            ],
        ]);
    }
}

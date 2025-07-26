<?php

namespace Database\Seeders;

use App\Models\Post_like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post_likeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post_like::factory(10)->create();
    }
}

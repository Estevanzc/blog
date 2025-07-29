<?php

namespace Database\Seeders;

use App\Models\Post_view;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post_viewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Post_view::factory(10)->create();
    }
}

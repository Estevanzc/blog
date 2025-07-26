<?php

namespace Database\Seeders;

use App\Models\Blog_tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Blog_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Blog_tag::factory(10)->create();
    }
}

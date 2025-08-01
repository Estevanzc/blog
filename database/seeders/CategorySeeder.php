<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table("categories")->insert([
            ["name" => "News"],
            ["name" => "Self"],
            ["name" => "Travel"],
            ["name" => "Food"],
            ["name" => "Health"],
            ["name" => "Nature"],
            ["name" => "Fitness"],
            ["name" => "Mind"],
            ["name" => "Parenting"],
            ["name" => "Love"],
            ["name" => "Finance"],
            ["name" => "Career"],
            ["name" => "Startup"],
            ["name" => "Tech"],
            ["name" => "Coding"],
            ["name" => "Gaming"],
            ["name" => "Books"],
            ["name" => "Movies"],
            ["name" => "Music"],
            ["name" => "Fashion"],
            ["name" => "Beauty"],
            ["name" => "Home"],
            ["name" => "Minimalism"],
            ["name" => "Sustainability"],
            ["name" => "Education"],
            ["name" => "Spirituality"],
            ["name" => "Inspiration"],
            ["name" => "Photography"],
            ["name" => "Art"],
            ["name" => "Culture"],
            ["name" => "Productivity"],
            ["name" => "Mindset"],
            ["name" => "Pets"],
            ["name" => "Science"],
            ["name" => "Politics"],
            ["name" => "History"],
            ["name" => "Languages"],
            ["name" => "Cars"],
            ["name" => "Luxury"],
            ["name" => "Outdoors"],
            ["name" => "Urban"],
            ["name" => "Rural"],
        ]);
    }
}

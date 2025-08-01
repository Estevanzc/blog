<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\Blog_tagSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\FollowerSeeder;
use Database\Seeders\Post_tagSeeder;
use Database\Seeders\OcupationSeeder;
use Database\Seeders\Post_likeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'birth' => '2008-02-26',
            'dark_mode' => true,
            'role' => 2,
        ]);
        $this->call([
            OcupationSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            BlogSeeder::class,
            PostSeeder::class,
            Post_likeSeeder::class,
            Post_tagSeeder::class,
            Post_viewSeeder::class,
            Blog_tagSeeder::class,
            FollowerSeeder::class,
            CommentSeeder::class,
            PreferenceSeeder::class,
            MemberSeeder::class,
            TrophySeeder::class,
            UserTrophySeeder::class,
        ]);
    }
}

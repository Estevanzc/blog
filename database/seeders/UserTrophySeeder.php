<?php

namespace Database\Seeders;

use App\Models\User_trophy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTrophySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User_trophy::factory(10)->create();
    }
}

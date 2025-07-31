<?php

namespace Database\Seeders;

use App\Models\Key_word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Key_wordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Key_word::factory()->create(20);
    }
}

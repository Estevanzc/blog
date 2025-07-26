<?php

namespace Database\Seeders;

use App\Models\Ocupation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OcupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ocupation::factory(10)->create();
    }
}

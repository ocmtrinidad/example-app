<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Import the Ninja model to use in the seeder.
use App\Models\Ninja;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This will create 50 instances of the Ninja model with fake data.
        Ninja::factory()->count(50)->create();
    }
}

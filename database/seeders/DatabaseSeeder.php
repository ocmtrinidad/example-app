<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // Run with php artisan migrate:fresh --seed
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Calls seeder classes and runs their run() method.
        $this->call([
            // DojoSeeder::class before NinjaSeeder::class because Ninja model relies on Dojo model for dojo_id foreign key.
            // If Dojo migration file was created after Ninja migration file, then change its timestamp.
            DojoSeeder::class,
            NinjaSeeder::class
        ]);
    }
}

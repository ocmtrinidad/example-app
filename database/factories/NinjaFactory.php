<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
// Called by Ninja::factory()
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // Creates a new instance of the Ninja model with fake data.
    // Ninja::factory()->count(n)->create() to create n instances.
    public function definition(): array
    {
        return [
            // The fake() function is provided by the Faker library, which generates random data.
            "name" => fake()->name(),
            "skill" => fake()->numberBetween(0, 100),
            "bio" => fake()->realText(500),
            // The dojo_id is set to a random Dojo's id.
            // Dojo::inRandomOrder() retrieves all dojos in a random order, ->first() gets the first one, and ->id gets the id.
            "dojo_id" => Dojo::inRandomOrder()->first()->id,
        ];
    }
}

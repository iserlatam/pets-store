<?php

namespace Database\Factories;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $petTypes = ['dog', 'cat'];

        return [
            'name' => fake()->name(),
            'type' => fake()->randomElement($petTypes),
            'breed' => Str::random(6),
            'age' => fake()->numberBetween(1,12),
            // 'owner_id' => Owner::factory()
        ];
    }
}

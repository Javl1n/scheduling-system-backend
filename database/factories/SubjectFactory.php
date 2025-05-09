<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // "code" => Str::upper(fake()->randomLetter() . fake()->randomLetter() ) . " " . fake()->numberBetween(100, 400),
            "code" =>  "IT " . fake()->unique()->numberBetween(100, 400),
            "title" => fake()->unique()->words(3, true)
        ];
    }
}

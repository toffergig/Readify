<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
        return [
            'name' => $this->faker->name,
            'breeds' => $this->faker->randomElement(['Persian', 'Siamese', 'Sphynx', 'Birman', 'British Shorthair']),
            'species' => $this->faker->randomElement(['cat', 'dog', 'rabbit']),
            'age' => $this->faker->randomElement(['1 year', '2 years', '3 years', '4 years', '5 years']),
            'size' => $this->faker->randomElement(['small', 'medium', 'large']),
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->url,
            'phone' => $this->faker->phoneNumber,
            'description' => $this->faker->paragraphs($nb = 3, $asText = true),
        ];
    }
}

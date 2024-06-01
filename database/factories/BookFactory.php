<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'publishing_date' => $this->faker->date,
            'isbn' => $this->faker->isbn13(),
            'summary' => $this->faker->sentence(10),
            'cover' => $this->faker->imageUrl,
        ];
    }
}

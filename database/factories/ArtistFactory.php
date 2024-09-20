<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
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
            'bio' => $this->faker->paragraph,
            'country' => $this->faker->country,
            'formed_year' => $this->faker->year,
            'website' => $this->faker->url,
            'image' => $this->faker->imageUrl(300, 300, 'people'),
        ];
    }
}

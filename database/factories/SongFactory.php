<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'album_id' => Album::factory(),
            'title' => $this->faker->sentence(4),
            'track_number' => $this->faker->numberBetween(1, 20),
            'duration' => $this->faker->time('H:i:s', '00:10:00'),
        ];
    }
}

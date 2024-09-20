<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create 10 artists
        Artist::factory(10)->create()->each(function ($artist) {
            // For each artist, create 1-3 albums
            $albums = Album::factory(rand(1, 3))->create(['artist_id' => $artist->id]);

            $albums->each(function ($album) {
                // For each album, create 5-12 songs
                Song::factory(rand(5, 12))->create(['album_id' => $album->id]);
            });
        });

        $artists = [
            [
                'name' => 'The Midnight Echoes',
                'bio' => 'Formed in 2015, The Midnight Echoes blend indie rock with synth-pop elements, creating a unique sound that resonates with fans worldwide.',
                'country' => 'United States',
                'formed_year' => 2015,
                'website' => 'https://themidnightechoes.com',
                'image' => 'midnight_echoes.jpg',
            ],
            [
                'name' => 'Luna Skye',
                'bio' => 'Luna Skye is a solo artist known for her ethereal vocals and dreamy electronic productions, inspired by nature and cosmic themes.',
                'country' => 'Canada',
                'formed_year' => 2018,
                'website' => 'https://lunaskyemusic.com',
                'image' => 'luna_skye.jpg',
            ],
            [
                'name' => 'Neon Pulse',
                'bio' => 'Neon Pulse is an electronic duo that combines retro synth sounds with modern production techniques, creating energetic tracks for the dance floor.',
                'country' => 'Germany',
                'formed_year' => 2016,
                'website' => 'https://neonpulsemusic.de',
                'image' => 'neon_pulse.jpg',
            ],
        ];

        foreach ($artists as $artistData) {
            $artist = Artist::create($artistData);

            $albums = [
                [
                    'title' => 'Midnight Whispers',
                    'release_date' => '2022-05-15',
                    'cover_image' => 'midnight_whispers.jpg',
                ],
                [
                    'title' => 'Echoes of Dawn',
                    'release_date' => '2020-11-03',
                    'cover_image' => 'echoes_of_dawn.jpg',
                ],
            ];

            foreach ($albums as $albumData) {
                $album = $artist->albums()->create($albumData);

                $songs = [
                    ['title' => 'Starlight Serenade', 'track_number' => 1, 'duration' => '00:03:45'],
                    ['title' => 'Neon Dreams', 'track_number' => 2, 'duration' => '00:04:12'],
                    ['title' => 'Whispers in the Wind', 'track_number' => 3, 'duration' => '00:03:58'],
                    ['title' => 'Midnight Drive', 'track_number' => 4, 'duration' => '00:04:30'],
                    ['title' => 'Echoes of You', 'track_number' => 5, 'duration' => '00:03:22'],
                ];

                foreach ($songs as $songData) {
                    $album->songs()->create($songData);
                }
            }
        }
    }
}

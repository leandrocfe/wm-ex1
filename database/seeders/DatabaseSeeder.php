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
    }
}

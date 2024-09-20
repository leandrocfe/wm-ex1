<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Song;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // USer seeder
        User::factory(10)->create();



    }
}

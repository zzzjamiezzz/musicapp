<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artist;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test users
        User::factory(10)->create();

        // Create test artists
        Artist::factory(5)->create();
    }
}

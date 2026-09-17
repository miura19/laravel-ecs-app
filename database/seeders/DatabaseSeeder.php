<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(NewsTableSeeder::class);
        $this->call(PostTableSeeder::class);
    }
}

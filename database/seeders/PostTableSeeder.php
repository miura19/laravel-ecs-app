<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'First Post Title',
                'user_id' => 1,
                'content' => 'This is the content of the first post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post Title',
                'user_id' => 1,
                'content' => 'This is the content of the second post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Post Title',
                'user_id' => 2,
                'content' => 'This is the content of the third post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fourth Post Title',
                'user_id' => 2,
                'content' => 'This is the content of the fourth post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

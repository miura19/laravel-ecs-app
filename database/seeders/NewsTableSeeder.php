<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'First News Title',
                'content' => 'This is the content of the first news item.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second News Title',
                'content' => 'This is the content of the second news item.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third News Title',
                'content' => 'This is the content of the third news item.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

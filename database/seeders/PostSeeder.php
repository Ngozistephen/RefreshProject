<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post 1',
            'description' => 'Something something long text with How Far',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Post::create([
            'title' => 'Post 2',
            'description' => 'Something something long text with How Far',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Post::create([
            'title' => 'Post 3',
            'description' => 'Something something long text with How Far',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Post::create([
            'title' => 'Post 4',
            'description' => 'Something something long text with How Far',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
     
    }
}

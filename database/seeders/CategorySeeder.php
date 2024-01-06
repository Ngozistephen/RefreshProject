<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Category 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Category 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'name' => 'Category 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Category 4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



       
    }
}

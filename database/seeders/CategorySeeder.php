<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Music',
            'description' =>'Events related to music and concerts',
        ]);
        Category::create([
            'name' => 'Sports',
            'description' =>'Sports events and competitions',
        ]);
        Category::create([
            'name' => 'Arts',
            'description' =>'Art exhibitions and cultural events',
        ]);
    }
}

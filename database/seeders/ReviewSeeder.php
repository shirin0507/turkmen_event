<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'event_id' => 1,
            'user_id' => 1,
            'rating' => 5,
            'comment' => 'Amazing event, had a great time!',
        ]);
        Review::create([
            'event_id' => 2,
            'user_id' => 2,
            'rating' => 4,
            'comment' => 'Very informative and well-organized.',
        ]);
    }
}

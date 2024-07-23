<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Organizer;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'venue_id' => Venue::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'organizer_id' => Organizer::inRandomOrder()->first()->id,
        ];
    }
}

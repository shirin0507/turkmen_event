<?php

namespace Database\Factories;

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
            'venue_id' => App\Models\Venue::inRandomOrder()->first()->id,
            'category_id' => App\Models\Category::inRandomOrder()->first()->id,
            'organizer_id' => App\Models\Organizer::inRandomOrder()->first()->id,
        ];
    }
}

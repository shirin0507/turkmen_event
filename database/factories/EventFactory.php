<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Organizer;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'date' => fake()->date(),
            'location' => fake()->city(),
            'venue_id' => Venue::inRandomOrder()->first()->id,
            'organizer_id' => Organizer::inRandomOrder()->first()->id,
        ];
    }
}

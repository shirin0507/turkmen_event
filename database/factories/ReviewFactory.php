<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => factory(App\Models\Event::class),
            'user_id' => factory(App\Models\User::class),
            'review' => fake()->paragraph(),
            'rating' => fake()->numberBetween(1, 5),
        ];
    }
}

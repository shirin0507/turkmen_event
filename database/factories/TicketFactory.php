<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['General Admission', 'VIP', 'Early Bird']),
            'price' => fake()->randomFloat(2, 10, 200),
            'quantity' => fake()->numberBetween(50, 200),
            'event_id' => factory(App\Models\Event::class),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => factory(App\Models\User::class),
            'ticket_id' => factory(App\Models\Ticket::class),
            'quantity' => fake()->numberBetween(1, 5),
            'total_price' => fake()->randomFloat(2, 50, 500),
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Event;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $events = Event::all();
        Order::create([
            'user_id' => $users->random()->id,
            'event_id' => $events->random()->id,
            'quantity' => 2,
            'total_price' => 200.00,
        ]);
        Order::create([
            'user_id' => $users->random()->id,
            'event_id' => $events->random()->id,
            'quantity' => 1,
            'total_price' => 150.00,
        ]);
        Order::create([
            'user_id' => $users->random()->id,
            'event_id' => $events->random()->id,
            'quantity' => 3,
            'total_price' => 300.00,
        ]);
        Order::create([
            'user_id' => $users->random()->id,
            'event_id' => $events->random()->id,
            'quantity' => 4,
            'total_price' => 400.00,
        ]);
        Order::create([
            'user_id' => $users->random()->id,
            'event_id' => $events->random()->id,
            'quantity' => 2,
            'total_price' => 250.00,
        ]);
    }
}

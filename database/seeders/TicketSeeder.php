<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'event_id' => 1,
            'user_id' => 1,
            'price' => 100.00,
            'quantity' => 1,
            'status' => 'confirmed',
        ]);
        Ticket::create([
            'event_id' => 2,
            'user_id' => 2,
            'price' => 150.00,
            'quantity' => 1,
            'status' => 'confirmed',
        ]);
    }
}

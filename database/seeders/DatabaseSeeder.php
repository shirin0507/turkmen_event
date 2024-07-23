<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Event;
use App\Models\Order;
use App\Models\Organizer;
use App\Models\Venue;
use App\Models\Review;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(5)->create();
        Venue::factory(5)->create();

        Organizer::factory(5)->create();
        Event::factory(10)->create()->each(function ($event) {
            Ticket::factory(20)->create(['event_id' => $event->id]);
            Review::factory(20)->create(['event_id' => $event->id]);
        });
        Order::factory(15)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            UserSeeder::class,
            VenueSeeder::class,
            CategorySeeder::class,
            OrganizerSeeder::class,
            EventSeeder::class,
            TicketSeeder::class,
            OrderSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}

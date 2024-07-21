<?php

namespace Database\Seeders;

use App\Models\User;
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
Ticket::factory(20)->create();
Category::factory(5)->create();
Event::factory(10)->create();
Order::factory(15)->create();
Organizer::factory(5)->create();
Review::factory(20)->create();
Venue::factory(5)->create();

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

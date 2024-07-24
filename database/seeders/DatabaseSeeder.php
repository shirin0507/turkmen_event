<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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

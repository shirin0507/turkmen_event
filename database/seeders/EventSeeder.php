<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Event::create([
            'name' => 'Turkmenistan Cultural Festival',
            'description' => 'A festival showcasing the rich cultural heritage of Turkmenistan.',
            'date' => '2024-08-01',
            'location' => 'Ashgabat',
            'organizer_id' => 1,
            'venue_id' => 1,
        ]);
        Event::create([
            'name' => 'Tech Conference 2024',
            'description' => 'A conference to discuss the latest in technology.',
            'date' => '2024-09-15',
            'location' => 'Turkmenbashi',
            'organizer_id' => 2,
            'venue_id' => 2,
        ]);
    }
}

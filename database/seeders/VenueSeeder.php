<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venue::create([
            'name' => 'Ashgabat Expo Center',
            'address' => 'Ashgabat',
            'city' => 'Ashgabat',
            'country' => 'Turkmenistan',
            'capacity' => '5000',
        ]);
        Venue::create([
            'name' => 'Turkmenbashi Convention Center',
            'address' => 'Turkmenbashi',
            'city' => '',
            'country' => 'Turkmenistan',
            'capacity' => '3000',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organizer;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizer::create([
            'name' => 'Turkmenistan Cultural Committee',
            'email' => 'contact@culturalcommittee.tm',
        ]);
        Organizer::create([
            'name' => 'Tech Innovators Inc.',
            'email' => 'info@techinnovators.tm',
        ]);
    }
}

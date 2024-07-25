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
            'phone' => '+99312227643',
        ]);
        Organizer::create([
            'name' => 'Tech Innovators',
            'email' => 'info@techinnovators.co.in',
            'phone' => '(+91)99132254331',
        ]);
    }
}

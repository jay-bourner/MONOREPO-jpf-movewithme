<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venue::create([
            'name' => 'Ingoldisthorpe Church Hall',
            'address' => '36 Hill Road',
            'town' => 'Ingoldisthorpe',
            'postcode' => 'PE31 6NZ',
            'capacity' => 20
        ]);

        Venue::create([
            'name' => 'Heacham Public Hall',
            'address' => 'Station Road',
            'town' => 'Heacham',
            'postcode' => 'PE31 7HG',
            'capacity' => 25
        ]);

        Venue::create([
            'name' => 'Rudham Districts Village Hall',
            'address' => 'School Road',
            'town' => 'Rudham',
            'postcode' => 'PE31 8GN',
            'capacity' => 20
        ]);

        Venue::create([
            'name' => 'Heacham Scout Hut',
            'address' => 'Sunnyside, Heacham',
            'town' => 'Kings Lynn',
            'postcode' => 'PE31 7DU',
            'capacity' => 15
        ]);

        Venue::create([
            'name' => 'South Creake Village Hall',
            'address' => 'The Memorail Pavilion, The Grn',
            'town' => 'Fakenham',
            'postcode' => 'NR21 9PD',
            'capacity' => 20
        ]);
    }
}

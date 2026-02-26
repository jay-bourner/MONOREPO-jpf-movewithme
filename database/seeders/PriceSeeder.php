<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::create([
            'cost' => '9.00',
            'type' => 'payg',
        ]);

        Price::create([
            'cost' => '44.00',
            'type' => 'term',
            'number_of_classes' => 1,
            'weekly_period' => 6,
        ]);

        Price::create([
            'cost' => '88.00',
            'type' => 'term',
            'number_of_classes' => 2,
            'weekly_period' => 6,
        ]);

        Price::create([
            'cost' => '132.00',
            'type' => 'term',
            'number_of_classes' => 3,
            'weekly_period' => 6,
        ]);

        Price::create([
            'cost' => '176.00',
            'type' => 'term',
            'number_of_classes' => 4,
            'weekly_period' => 6,
        ]);
    }
}

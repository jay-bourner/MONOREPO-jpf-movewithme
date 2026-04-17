<?php

namespace Database\Factories;

use App\Models\FitnessClass;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $venue = Venue::all()->random()->id;
        $fitnessClass = FitnessClass::all()->random()->id;

        return [
            'fitness_class_id' => $fitnessClass,
            'venue_id' => $venue,
            'category_id' => 1,
            'date_and_time' => '',
            'duration' => '',
        ];
    }
}

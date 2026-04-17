<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jaime',
            'email' => 'jltooley77@gmail.com',
            'password' => '$2y$10$2L3Wev3kubiCrrZMaLz5/uTyX3jM1PI41J7wORvZ8ixLQRT7GBEy.', // password
        ]);

        User::create([
            'name' => 'Jason',
            'email' => 'jay.bourner@gmail.com',
            'password' => Hash::make('password'), // password
        ]);

        $this->call([
            CategorySeeder::class,
            PriceSeeder::class,
            VenueSeeder::class,
            FitnessClassSeeder::class,
            // ScheduleSeeder::class
        ]);
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Models\FitnessClass;
use App\Enums\Days;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

Route::get('/', function () {
    return ['laravel' => app()->version()];
});

if(App::environment('local')) {
    Route::get('/schedule-test', function() {
        // essential attributes to build a schedule
        $fitnessClassId = 1;
        $fitnessClassTime = '15:00';

        // essentials to calculate the start date of the schedule
        $fitnessClass = FitnessClass::find($fitnessClassId);
        $classStartDate = $fitnessClass->start_date;
        $scheduledStartDate = '2026-05-27';
        $now = Carbon::today();

        // check if class start date if before or after todays date.
        if($now > $classStartDate) {
            $startDate = $now;
        }

        if($now < $classStartDate) {
            $startDate = Carbon::create($classStartDate);
        }

        if($startDate < $scheduledStartDate) {
            $startDate = Carbon::create($scheduledStartDate);
        }
        $fullScheduleStart = $startDate->copy();

        $endDate = $startDate->addMonth(3);

        // temporary output
        $schedule = array(
            'shedule_day' => $startDate->format('D'),
            'schedule_start_date' => $fullScheduleStart->format('D d-m-Y') . ' ' . $fitnessClassTime,
            'schedule_end_date' => $endDate->format('D d-m-Y'),
            'schedule_dates' => array()
        );

        for($date = $fullScheduleStart; $date < $endDate; $date->addWeek(1)) {
            \Log::info('date ' . $date);
            $schedule['schedule_dates'][] = $date->format('Y-m-d');
        }


        dd($schedule);
    });  
}

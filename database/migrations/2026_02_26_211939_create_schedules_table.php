<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fitness_class_id');
            $table->foreignId('venue_id');
            $table->foreignId('category_id');
            $table->time('start_time');
            $table->time('duration');
            $table->date('date');
            $table->enum('day', ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']);
            $table->string('age_groups');
            $table->string('url');
            $table->boolean('rescheduled');
            $table->enum('pricing', ['free', 'Purchase Required']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};

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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('cost', 3, 2);
            $table->enum('type', ['payg', 'term']);
            $table->integer('number_of_classes')->nullable();
            $table->string('weekly_period')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->unique(['type' => 'payg']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};

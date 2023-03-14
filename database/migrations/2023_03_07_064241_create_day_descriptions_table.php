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
        Schema::create('day_descriptions', function (Blueprint $table) {
            $table->id('day_description_id');
            $table->foreignId('pakage_id')->constrained();
            $table->integer('days');
            $table->string('DayDescription');
            $table->timestamps();
            $table->unique(['pakage_id','days']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_descriptions');
    }
};

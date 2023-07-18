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
        Schema::create('car_spec', function (Blueprint $table) {
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('spec_id')->constrained('specs');
            $table->primary(['car_id', 'spec_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_spec');
    }
};

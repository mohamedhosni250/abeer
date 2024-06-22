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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->text('description')->nullable();
            $table->integer('duration'); // Duration in years
            $table->string('intake'); // Intake period (e.g., Ongoing)
            $table->decimal('fee_per_year', 10, 2); // Fee per year
            $table->decimal('scholarship_percentage', 5, 2)->nullable(); // Scholarship percentage
            $table->foreignId('university_id')->constrained();
            $table->foreignId('degree_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};

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
            $table->string('image_url')->nullable();
            $table->longText('description')->nullable();
            $table->string('duration')->nullable(); // Duration in years
            $table->string('study_mode')->nullable(); // Study mode (e.g., On Campus)
            $table->string('intake')->nullable(); // Intake period (e.g., Ongoing)
            $table->string('fee_per_year')->nullable(); // Fee per year
            $table->string('scholarship_percentage')->nullable(); // Scholarship percentage
            $table->string('scholarship_fee_per_year')->nullable(); // Fee after scholarship per year           
            $table->foreignId('university_id')->constrained()->onDelete('cascade');;
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

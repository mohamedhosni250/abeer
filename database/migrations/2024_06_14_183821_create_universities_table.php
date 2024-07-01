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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('logo')->nullable();
            $table->string('featured_image')->nullable();
            $table->decimal('starting_fee', 10, 2)->nullable();
            $table->string('ranking')->nullable();
            $table->integer('students_count')->nullable();
            $table->integer('programs_count')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('location_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
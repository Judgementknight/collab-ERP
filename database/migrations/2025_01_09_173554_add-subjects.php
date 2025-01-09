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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id'); // Primary key for subject
            $table->unsignedBigInteger('course_id'); // Foreign key linking to the course
            $table->string('subject_name', 255); // Name of the subject (e.g., Data Structures, Marketing)
            $table->text('subject_description')->nullable(); // Optional description for the subject
            $table->timestamps(); // Adds created_at and updated_at columns
        
            // Foreign key constraint
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};

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
        //
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendance_id'); // Primary key
            $table->unsignedBigInteger('student_id'); // Foreign key to students table
            $table->unsignedBigInteger('course_id'); // Foreign key to courses table
            $table->unsignedBigInteger('subject_id'); // Foreign key to subjects table
            $table->date('class_date'); // Date of the class session
            $table->string('status', 20); // Attendance status (e.g., present, absent, late)
            $table->timestamps(); // Adds created_at and updated_at columns
        
            // Foreign key constraints
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            // $table->foreign('subject_id')->references('subject_id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};

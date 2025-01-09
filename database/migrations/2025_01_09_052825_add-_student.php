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
        Schema::create('students', function(Blueprint $table) {
            $table->id('student_id');
            $table->string('first_name',100);
            $table->string('last_name', 100);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 10)->nullable();
            $table->text('address')->nullable();
            $table->string('course_program', 255)->nullable();
            $table->date('date_registered')->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     * 
     * * @return void

     */
    public function down(): void
    {
        //
        Schema::dropIfExists('students');

    }
};

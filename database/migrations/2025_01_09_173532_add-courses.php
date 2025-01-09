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
        Schema::create('courses', function(Blueprint $table){
            $table->id('course_id');
            $table->string('course_name', 255);
            $table->text('course_description')->nullable();
            $table->string('duration', 50)->nullable();
            $table->integer('credits')->default(0);
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};

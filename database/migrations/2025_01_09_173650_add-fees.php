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
        Schema::create('student_fees', function (Blueprint $table) {
            $table->id('fee_id'); // Primary key
            $table->unsignedBigInteger('student_id'); // Foreign key to students table
            $table->decimal('amount', 10, 2); // Fee amount
            $table->date('payment_date'); // Payment date
            $table->enum('status', ['Paid', 'Pending']); // Status of the payment
            $table->timestamps(); // Adds created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('student_fees');

    }
};


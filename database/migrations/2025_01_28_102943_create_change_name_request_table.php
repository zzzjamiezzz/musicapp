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
        Schema::create('change_name_request', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('artist_id')->constrained('artist')->onDelete('cascade'); // ✅ Correct Foreign Key
            $table->string('current_name'); // Current stage name
            $table->string('requested_name'); // Requested new stage name
            $table->text('reason')->nullable(); // Optional reason for the change
            $table->string('status')->default('pending'); // Default status is 'pending'
            $table->text('admin_notes')->nullable(); // Admin's response or notes
            $table->timestamps();

            // Foreign key constraint

            // Index for faster querying
            $table->index(['artist_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('change_name_request');
    }
};

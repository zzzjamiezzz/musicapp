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
        Schema::create('artist_activity', function (Blueprint $table) {
            $table->id(); // ✅ Primary Key
            $table->foreignId('artist_id')->constrained('artist')->onDelete('cascade'); // ✅ Correct Foreign Key
            $table->enum('type', ['New Album', 'New Song', 'Profile Update']); // ✅ Use ENUM for predefined types
            $table->text('description'); // ✅ Details of the activity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_activity');
    }
};

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
        Schema::create('artist', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->unique()->constrained('user')->onDelete('cascade'); // ✅ Foreign Key
            $table->string('stagename')->unique();
            $table->string('genre');
            $table->string('profile_picture')->nullable();
            $table->text('socialmedialinks')->nullable();
            $table->string('website')->nullable();
            $table->text('biography')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist');
    }
};

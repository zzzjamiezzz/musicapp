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
        Schema::create('follow', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('follower_id'); // ID of the user who follows
            $table->unsignedBigInteger('followed_id'); // ID of the followed entity (user or artist)
            $table->string('followed_type'); // 'User' or 'Artist'
            $table->timestamps();

            // Indexes for performance
            $table->index(['follower_id']);
            $table->index(['followed_id', 'followed_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow');
    }
};

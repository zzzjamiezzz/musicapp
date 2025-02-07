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
        Schema::create('like', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id'); // User or Artist ID
            $table->string('user_type'); // 'User' or 'Artist'
            $table->unsignedBigInteger('item_id'); // Album, Music, or Playlist ID
            $table->string('item_type'); // 'Album', 'Music', or 'Playlist'
            $table->timestamps();

            // Indexes for performance
            $table->index(['user_id', 'user_type']);
            $table->index(['item_id', 'item_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like');
    }
};

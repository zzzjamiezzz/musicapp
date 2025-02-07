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
        Schema::create('playlist', function (Blueprint $table) {
            $table->id(); // ✅ Primary Key
            $table->unsignedBigInteger('creator_id'); // ✅ Foreign Key for User or Artist
            $table->string('creator_type'); // ✅ 'User' or 'Artist' (Polymorphic)
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->text('description')->nullable(); // ✅ Description of the playlist
            $table->timestamps();

            // ✅ Index for polymorphic relationship (for better query performance)
            $table->index(['creator_id', 'creator_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist');
    }
};

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
        Schema::create('playlist_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playlist_id')->constrained('playlist')->onDelete('cascade'); // ✅ Correct Foreign Key
            $table->unsignedBigInteger('item_id'); // ✅ Foreign Key for Music or Album (Polymorphic)
            $table->string('item_type'); // ✅ 'Album' or 'Music'
            $table->timestamps();

            // ✅ Index for polymorphic relationship (for better query performance)
            $table->index(['item_id', 'item_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_item');
    }
};

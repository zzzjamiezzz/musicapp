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
        Schema::create('comment', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('item_id'); // Album or Music ID
            $table->string('item_type'); // 'Album' or 'Music'
            $table->text('content'); // The comment text
            $table->timestamps(); // Created_at and updated_at for timestamps

            // Indexes for performance
            $table->index(['item_id', 'item_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};

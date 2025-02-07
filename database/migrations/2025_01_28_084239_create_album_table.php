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
        Schema::create('album', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('artist_id')->constrained('artist')->onDelete('cascade'); // ✅ Correct Foreign Key
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->date('release_date');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album');
    }
};

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
        Schema::create('report_content', function (Blueprint $table) {
            $table->id(); // ✅ Primary Key
            $table->unsignedBigInteger('reporter_id'); // ✅ ID of user/artist who reported
            $table->string('reporter_type'); // ✅ 'User' or 'Artist'
            $table->unsignedBigInteger('item_id'); // ✅ ID of the reported content
            $table->string('item_type'); // ✅ 'Comment', 'Music', 'Album'
            $table->text('reason'); // ✅ Reason for the report
            $table->string('status')->default('pending'); // ✅ Default status is 'pending'
            $table->timestamps();

            // ✅ Indexes for better query performance
            $table->index(['reporter_id', 'reporter_type']);
            $table->index(['item_id', 'item_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_content');
    }
};

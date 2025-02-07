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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id(); // ✅ Primary Key
            $table->unsignedBigInteger('submitter_id'); // ✅ ID of user/artist
            $table->string('submitter_type'); // ✅ 'User' or 'Artist'
            $table->string('subject'); // ✅ Feedback category (e.g., Feature Request, Bug Report)
            $table->text('message'); // ✅ The feedback content
            $table->string('status')->default('pending'); // ✅ Default status is 'pending'
            $table->timestamps();

            // ✅ Indexes for better query performance
            $table->index(['submitter_id', 'submitter_type']);
            $table->index(['status']);
            $table->index(['created_at']); // ✅ Improves sorting by most recent feedback
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};

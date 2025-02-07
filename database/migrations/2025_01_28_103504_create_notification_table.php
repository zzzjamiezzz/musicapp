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
        Schema::create('notification', function (Blueprint $table) {
            $table->id(); // ✅ Primary Key
            $table->unsignedBigInteger('receiver_id'); // ✅ ID of user/artist receiving the notification
            $table->string('receiver_type'); // ✅ 'User' or 'Artist'
            $table->text('message'); // ✅ Notification message
            $table->text('link')->nullable(); // ✅ Change to text for longer URLs if needed
            $table->enum('status', ['unread', 'read'])->default('unread'); // ✅ Use enum for predefined statuses
            $table->timestamps();

            // ✅ Indexes for better query performance
            $table->index(['receiver_id', 'receiver_type']);
            $table->index(['status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification');
    }
};

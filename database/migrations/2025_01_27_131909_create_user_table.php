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
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('username')->unique(); // Unique username
            $table->string('email')->unique(); // Unique email
            $table->string('phonenumber')->nullable(); // Nullable phone number
            $table->string('password'); // Password
            $table->string('profile_picture')->nullable();
            $table->timestamps(); // Created_at and Updated_at timestamps
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};

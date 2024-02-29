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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('job')->nullable();
            $table->string('company')->nullable();
            $table->longText('address')->nullable();
            $table->longText('about')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('twitter_profile')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->string('instagram_profile')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_name')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_category')->nullable();
            $table->string('portfolio_image')->nullable();
            $table->string('detail_image')->nullable();
            $table->string('wrap_image1')->nullable();
            $table->string('wrap_image2')->nullable();
            $table->string('wr_image')->nullable();
            $table->text('portfolio_description')->nullable();
            $table->text('other_text')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('client_mail')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_location')->nullable();
            $table->string('project_link')->nullable();
            $table->string('project_date')->nullable();
            $table->string('client_address')->nullable();
            $table->string('facebook_handle')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->string('instagram_handle')->nullable();
            $table->string('youtube_handle')->nullable();
            $table->string('linkedin_handle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

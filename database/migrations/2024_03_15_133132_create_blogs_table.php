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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_category_id')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_image')->nullable();
            $table->string('blog_tags')->nullable();
            $table->text('blog_description')->nullable();
            $table->string('detail_image')->nullable();
            $table->string('wrap_image')->nullable();
            $table->string('wrap_image2')->nullable();
            $table->text('other_text')->nullable();
            $table->string('blog_thumb')->nullable();
            $table->string('post_thumb')->nullable();
            $table->string('created_by')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

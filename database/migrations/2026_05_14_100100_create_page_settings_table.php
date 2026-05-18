<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->json('title');
            $table->json('description')->nullable();
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->boolean('is_published')->default(true)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_settings');
    }
};

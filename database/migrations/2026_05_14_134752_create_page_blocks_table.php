<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('page')->index();
            $table->string('name')->nullable();
            $table->json('title');
            $table->json('description')->nullable();
            $table->json('content')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->unique(['page', 'name']);
            $table->index(['page', 'is_published']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_blocks');
    }
};

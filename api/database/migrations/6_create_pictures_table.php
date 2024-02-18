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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->unique()->require();
            $table->string('alt_picture')->require();
            $table->timestamps();

            $table->foreignId('place_id')->nullable()->constrained('places', 'id');
            $table->foreignId('article_id')->nullable()->constrained('articles', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};

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
        Schema::create('favorite_movies', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Year');
            $table->string('imdbID')->unique();
            $table->string('Type');
            $table->string('Poster');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_movies');
    }
};

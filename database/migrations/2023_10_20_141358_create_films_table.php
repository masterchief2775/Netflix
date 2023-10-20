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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->string('description', 255);
            $table->string('duree', 255);
            $table->string('annee', 255);
            $table->string('realisateur', 255);
            $table->string('producteur', 255);
            $table->string('lienFilm', 255);
            $table->string('image', 255);
            $table->string('rating', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};

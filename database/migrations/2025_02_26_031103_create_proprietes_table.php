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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->decimal('surface', 8, 2);
            $table->decimal('prix', 10, 2);
            $table->integer('piece');
            $table->integer('chambre');
            $table->string('ville');
            $table->string('commune');
            $table->text('description')->nullable();
            $table->string('image_path')->nullable(); // Chemin de l'image de présentation
            $table->json('album_paths')->nullable(); // Chemins des images de l'album (JSON)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};

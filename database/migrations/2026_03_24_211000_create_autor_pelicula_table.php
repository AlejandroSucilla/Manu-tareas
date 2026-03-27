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
        Schema::create('autor_pelicula', function (Blueprint $table) {
            $table->id();
            // Crea la columna autor_id i la connecta amb la taula autors
            $table->foreignId('autor_id')->constrained()->onDelete('cascade');
            // Crea la columna llibre_id i la connecta amb la taula llibres
            $table->foreignId('pelicula_id')->constrained()->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autor_pelicula');
    }
};

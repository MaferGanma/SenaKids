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
        Schema::create('examen_general', function (Blueprint $table) {
            $table->id();
            $table->decimal('puntaje',5,2);
            $table->enum('estado',['reprobado, aprobado']);
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_general');
    }
};

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
        Schema::create('evaluaciones_finales', function (Blueprint $table) {
            $table->id();
            $table->decimal('puntaje',5,2);
            $table->enum('estado',['aprobado','reprobado']);
            $table->unsignedBigInteger('tema_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones_finales');
    }
};

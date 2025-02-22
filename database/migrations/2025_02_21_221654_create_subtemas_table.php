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
        Schema::create('subtemas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_subtema')->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('tema_id');
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtemas');
    }
};

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
        Schema::create('mensagems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('conteudo', 2400);
            $table->string('caminhoFoto')->nullable();
            $table->unsignedBigInteger('destinatario');
            $table->unsignedBigInteger('remetente');
            $table->dateTime('dtEnvio');
            $table->unsignedBigInteger('idEmergencia');

            $table->foreign('idEmergencia')->references('id')->on('emergencias');
            $table->foreign('destinatario')->references('id')->on('users');
            $table->foreign('remetente')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};

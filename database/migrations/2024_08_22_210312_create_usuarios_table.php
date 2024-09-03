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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->unsignedInteger('id_contacto');
            $table->string('password',64);
          
            $table->char('rol',1)->default('C'); //'A' para Administrador, 'C' para Cliente.
            $table->timestamps();

            $table->foreign('id_contacto')->references('id_contacto')->on('contactos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

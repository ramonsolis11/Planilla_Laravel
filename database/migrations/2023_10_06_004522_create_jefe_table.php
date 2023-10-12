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
        Schema::create('jefe', function (Blueprint $table) {
            $table->id(); //Biginteger
            $table->string('nombre', 50);
            $table->text('direccion');
            $table->integer('telefono');
            $table->string('correo', 50);
            $table->string('password', 10);
            //asignamos la clave foranea
            $table->unsignedBigInteger('id_estado');
            //creamos la relacion
            $table->foreign('id_estado')->references('id')->on('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jefe');
    }
};

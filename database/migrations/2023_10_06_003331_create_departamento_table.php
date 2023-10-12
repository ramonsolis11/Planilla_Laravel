<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * crea la migracion y la tabla departamento
     */

    public function up(): void
    {
        Schema::create('departamento', function (Blueprint $table) {
            $table->id(); //crea el id de la tabla(primary key)
            $table->string('nombre', 50); //crea el campo nombre de tipo string con 50 caracteres
            $table->timestamps(); //crea los campos created_at(fecha)  y updated_at(hora)
        });
    }

    /**
     * Reverse the migrations.
     * volcar la migracion y la tabla departamento
     */

    public function down(): void
    {
        Schema::dropIfExists('departamento');
    }
};

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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            //asignando una foranea
            $table->unsignedBigInteger("id_jefe");

            //references indica a la informacion de la tabla jefe
            $table->foreign("id_jefe")->references("id")->on("jefe");

            //asignando una foranea
            $table->unsignedBigInteger("id_estado");

            //references indica a la informacion de la tabla estado
            $table->foreign("id_estado")->references("id")->on("estado");

            $table->timestamps();






        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};

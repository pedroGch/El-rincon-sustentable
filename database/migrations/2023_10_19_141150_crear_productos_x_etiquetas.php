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
      Schema::create('productos_x_etquitas', function (Blueprint $table) {
        //creamos las referencias a la tabla etiquetas
        $table->unsignedTinyInteger('etiqueta_id');
        $table->foreign('etiqueta_id')->references('etiqueta_id')->on('etiquetas');

        //creamos las referencias (de la forma corta) a la tabla productos
        $table->foreignId('producto_id')->constrained('productos', 'id');

        //aclaramos que la clave primaria es la combinacion de las claves primarias de producto y etiqueta
        $table->primary(['producto_id', 'etiqueta_id']);

        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('productos_x_etquitas');
    }
};

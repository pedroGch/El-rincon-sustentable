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
        Schema::create('productos_x_carrito', function (Blueprint $table) {
          // creamos la referencia a la tabla de productos
          $table->unsignedBigInteger('producto_id');
          $table->foreign('producto_id')->references('id')->on('productos');

          // creamos la referencia a la tabla de carritos
          $table->foreignId('carrito_id')->constrained('carritos', 'carrito_id');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_x_carrito');
    }
};

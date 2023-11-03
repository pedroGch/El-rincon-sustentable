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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_prod', 256);
            $table->string('imagen_prod', 256)->nullable();
            $table->string('alt', 256)->nullable();
            $table->unsignedInteger('categoria_id'); //FK
            $table->text('descripcion')->nullable();
            $table->unsignedInteger('stock');
            $table->unsignedInteger('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

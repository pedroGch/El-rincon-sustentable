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
        Schema::create('informacion_personal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 256);
            $table->string('apellido', 256);
            $table->string('email', 256);
            $table->string('codigo_postal', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacion_personal');
    }
};

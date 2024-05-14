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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('cliente_id')->constrained()->onDelete('cascade');
            $table->foreignId('especie_id')->constrained()->onDelete('cascade');;
            $table->string('raza');
            $table->string('color_pelo');
            $table->date('fecha_nacimiento');
            $table->string('peso_promedio');
            $table->string('peso_actual');
            $table->foreignId('historial_medico_id')->constrained()->onDelete('cascade');
            $table->foreignId('calendario_vacunacion_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};

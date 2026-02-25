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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('DNI', 50)->nullable();
            $table->string('APELLIDOS', 255)->nullable();
            $table->string('NOMBRES', 255)->nullable();
            $table->string('PAIS', 50)->nullable();
            $table->string('CIUDAD', 50)->nullable();
            $table->string('INSTITUCION', 255)->nullable();
            $table->string('PROFESION', 100)->nullable();
            $table->string('GRADO', 255)->nullable();
            $table->string('EMAIL', 255)->nullable();
            $table->string('CELULAR', 30)->nullable();
            $table->integer('ID_EVENTO')->nullable();
            $table->string('EVENTO', 255)->nullable();
            $table->integer('ANIO')->nullable();
            $table->string('FECHAS_EVENTO', 255)->nullable();
            $table->string('CODIGO', 20)->nullable();
            $table->text('OBSERVACION')->nullable();
            $table->string('ENLACE_1', 255)->nullable();
            $table->string('ENLACE_2', 255)->nullable();
            $table->string('ENLACE_3', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};

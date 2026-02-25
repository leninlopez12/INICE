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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // id INT PRIMARY KEY AUTO_INCREMENT
            $table->string('numero_factura', 50)->nullable(); 
            $table->string('usuario', 250)->nullable(); 
            $table->string('dni', 50)->nullable(); 
            $table->string('pais', 50)->nullable(); 
            $table->text('observacion')->nullable(); 
            $table->string('estado')->nullable(); 
            $table->string('servicio', 250)->nullable(); 
            $table->string('moneda', 25)->nullable(); 
            $table->decimal('monto_total', 10, 2)->nullable(); 
            $table->time('hora_emision')->nullable(); 
            $table->date('fecha_emision')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

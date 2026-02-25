<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_factura',
        'usuario',
        'dni',
        'pais',
        'observacion',
        'estado',
        'servicio',
        'moneda',
        'monto_total',
        'hora_emision',
        'fecha_emision',
    ];
}

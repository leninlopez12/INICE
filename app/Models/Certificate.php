<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'DNI', 'APELLIDOS', 'NOMBRES', 'PAIS', 'CIUDAD', 'INSTITUCION', 
        'PROFESION', 'GRADO', 'EMAIL', 'CELULAR', 'ID_EVENTO', 'EVENTO', 
        'ANIO', 'FECHAS_EVENTO', 'CODIGO', 'OBSERVACION', 'ENLACE_1', 
        'ENLACE_2', 'ENLACE_3'
    ];
}

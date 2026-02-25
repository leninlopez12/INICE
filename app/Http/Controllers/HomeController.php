<?php

namespace App\Http\Controllers;
use App\Models\Certificate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pagina(Request $request)
    {
        // Búsqueda por código
        if ($request->has('codigo')) {
            $codigo = $request->input('codigo');
            $certificado = Certificate::where('CODIGO', $codigo)->first();

            if ($certificado) {
                $nombres = ucwords(strtolower($certificado->NOMBRES));
                $apellidos = ucwords(strtolower($certificado->APELLIDOS));
                return view('page_main.index', compact('certificado', 'nombres', 'apellidos'));
            } else {
                return view('page_main.index', ['error' => 'Su Código no es válido']);
            }
        }

        // Búsqueda por DNI
        if ($request->has('dni')) {
            $dni = $request->input('dni');
            $dni_con_letra = 'CO-' . $dni;
    
            // Obtener el primer registro para mostrar nombre y apellido
            $certificados = Certificate::where('DNI', $dni_con_letra)->get();
            $nombre_apellido = $certificados->first(); // Obtener el primer registro para el nombre y apellido
    
            if ($certificados->isNotEmpty()) {
                $nombreCompleto = $nombre_apellido->NOMBRES . ' ' . $nombre_apellido->APELLIDOS;
                return view('page_main.index', [
                    'certificados' => $certificados,
                    'nombreCompleto' => $nombreCompleto
                ]);
            } else {
                return view('page_main.index', ['error_dni' => 'Su Documento de Identidad ingresado no existe']);
            }
        }

        return view('page_main.index');
    }
}

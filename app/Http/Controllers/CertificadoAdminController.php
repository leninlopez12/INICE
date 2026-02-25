<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificadoAdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); 
        $perPage = $request->input('perPage', 50);

        $certificates = Certificate::when($search, function ($query, $search) {
            return $query->where('DNI', 'like', "%$search%")
                         ->orWhere('APELLIDOS', 'like', "%$search%")
                         ->orWhere('NOMBRES', 'like', "%$search%")
                         ->orWhere('ID_EVENTO', 'like', "%$search%")
                         ->orWhere('EVENTO', 'like', "%$search%")
                         ->orWhere('CODIGO', 'like', "%$search%");
        })
        ->orderBy('id', 'desc')
        ->paginate($perPage);

        return view('certifi-view', compact('certificates', 'search', 'perPage'));
    }
    public function create()
    {
        return view('certifi-new');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Certificate::create($data);

        return redirect()->route('certificados-ad')->with('success', 'Certificado registrado correctamente');
    }
    public function buscarDni(Request $request)
    {
        $dni = 'CO-' . $request->input('dni');
    
        $certificate = DB::table('certificates')
            ->select('*', DB::raw("
                (LENGTH(COALESCE(APELLIDOS, '')) +
                 LENGTH(COALESCE(NOMBRES, '')) +
                 LENGTH(COALESCE(PAIS, '')) +
                 LENGTH(COALESCE(CIUDAD, '')) +
                 LENGTH(COALESCE(INSTITUCION, '')) +
                 LENGTH(COALESCE(PROFESION, '')) +
                 LENGTH(COALESCE(GRADO, '')) +
                 LENGTH(COALESCE(EMAIL, '')) +
                 LENGTH(COALESCE(CELULAR, ''))) AS info_length
            "))
            ->where('DNI', $dni)
            ->orderByDesc('info_length')
            ->first(); 
    
        if ($certificate) {
            return response()->json([
                'success' => true,
                'data' => [
                    'DNI' => $certificate->DNI,
                    'APELLIDOS' => $certificate->APELLIDOS,
                    'NOMBRES' => $certificate->NOMBRES,
                    'PAIS' => $certificate->PAIS,
                    'CIUDAD' => $certificate->CIUDAD,
                    'INSTITUCION' => $certificate->INSTITUCION,
                    'PROFESION' => $certificate->PROFESION,
                    'GRADO' => $certificate->GRADO,
                    'EMAIL' => $certificate->EMAIL,
                    'CELULAR' => $certificate->CELULAR,
                ],
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'No se encontraron datos para este DNI.',
        ]);
    }

    public function edit($id)
    {
        $certificado = Certificate::findOrFail($id);
        return view('certifi-edit', compact('certificado'));
    }
 
    public function update(Request $request, $id)
    {
        $certificado = Certificate::findOrFail($id);

        // Actualizar cada campo que puede ser null
        $certificado->DNI = $request->input('DNI');
        $certificado->APELLIDOS = $request->input('APELLIDOS');
        $certificado->NOMBRES = $request->input('NOMBRES');
        $certificado->PAIS = $request->input('PAIS');
        $certificado->CIUDAD = $request->input('CIUDAD');
        $certificado->INSTITUCION = $request->input('INSTITUCION');
        $certificado->PROFESION = $request->input('PROFESION');
        $certificado->GRADO = $request->input('GRADO');
        $certificado->EMAIL = $request->input('EMAIL');
        $certificado->CELULAR = $request->input('CELULAR');
        $certificado->ID_EVENTO = $request->input('ID_EVENTO');
        $certificado->EVENTO = $request->input('EVENTO');
        $certificado->ANIO = $request->input('ANIO');
        $certificado->FECHAS_EVENTO = $request->input('FECHAS_EVENTO');
        $certificado->CODIGO = $request->input('CODIGO');
        $certificado->OBSERVACION = $request->input('OBSERVACION');
        $certificado->ENLACE_1 = $request->input('ENLACE_1');
        $certificado->ENLACE_2 = $request->input('ENLACE_2');
        $certificado->ENLACE_3 = $request->input('ENLACE_3');

        $certificado->save();

        return redirect()->route('certificados-ad')->with('success', 'Certificado actualizado con éxito');
    }
    public function destroy($id)
    {
        // Busca el certificado por ID
        $certificado = Certificate::findOrFail($id);

        // Elimina el certificado
        $certificado->delete();

        // Redirecciona de vuelta a la lista de certificados con un mensaje de éxito
        return redirect()->route('certificados-ad')->with('success', 'Certificado eliminado correctamente.');
    }
    public function importCsv(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'csvFile' => 'required|mimes:csv,txt',
        ]);
    
        try {
            if (($handle = fopen($request->file('csvFile'), 'r')) !== false) {
                // Skip header row
    
                while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                    // Create a new certificate record with CSV data
                    Certificate::create([
                        'DNI' => $data[0] ?? null,
                        'APELLIDOS' => $data[1] ?? null,
                        'NOMBRES' => $data[2] ?? null,
                        'PAIS' => $data[3] ?? null,
                        'CIUDAD' => $data[4] ?? null,
                        'INSTITUCION' => $data[5] ?? null,
                        'PROFESION' => $data[6] ?? null,
                        'GRADO' => $data[7] ?? null,
                        'EMAIL' => $data[8] ?? null,
                        'CELULAR' => $data[9] ?? null,
                        'ID_EVENTO' => $data[10] ?? null,
                        'EVENTO' => $data[11] ?? null,
                        'ANIO' => $data[12] ?? null,
                        'FECHAS_EVENTO' => $data[13] ?? null,
                        'CODIGO' => $data[14] ?? null,
                        'OBSERVACION' => $data[15] ?? null,
                        'ENLACE_1' => $data[16] ?? null,
                        'ENLACE_2' => $data[17] ?? null,
                        'ENLACE_3' => $data[18] ?? null,
                    ]);
                }
    
                fclose($handle);
            }
    
            // Flash success message
            return redirect()->back()->with('success', 'Certificados importados correctamente.');
        } catch (\Exception $e) {
            // Flash error message
            return redirect()->back()->with('error', 'Error al importar certificados: ' . $e->getMessage());
        }
    }

    //MOSTRAR EN DASHBOARD EL TOTAL DE CERTIFICADOS

}


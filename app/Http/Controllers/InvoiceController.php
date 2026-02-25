<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class InvoiceController extends Controller
{   

    public function index(Request $request)
    {
        $query = Invoice::query();
    
        // Filtro de búsqueda
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('numero_factura', 'like', "%$search%")
                  ->orWhere('usuario', 'like', "%$search%")
                  ->orWhere('dni', 'like', "%$search%");
        }
        $query->orderBy('id', 'desc');
        // Paginación
        $perPage = $request->get('perPage', 50); // Valor predeterminado de 50
        $invoices = $query->paginate($perPage);
    
        return view('invoice.invoice-view', compact('invoices'));
    }
    
    

    public function create()
    {
        // Retorna la vista para crear una nueva factura
        return view('invoice.invoice-new');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'numero_factura' => 'nullable|string|max:50',
            'usuario' => 'nullable|string|max:250',
            'dni' => 'nullable|string|max:50',
            'pais' => 'nullable|string|max:50',
            'observacion' => 'nullable|string',
            'estado' => 'nullable|string|max:50',
            'servicio' => 'nullable|string|max:250',
            'moneda' => 'nullable|string|max:25',
            'monto_total' => 'nullable|numeric',
            'fecha_emision' => 'nullable|date',
        ]);

        // Creación de la nueva factura
        Invoice::create($request->all());
        return redirect()->route('invoices')->with('success', 'Factura creada exitosamente');
    }
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoice.invoice-edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        // Validación
        $validated = $request->validate([
            'numero_factura' => 'nullable|string|max:50',
            'usuario' => 'nullable|string|max:250',
            'dni' => 'nullable|string|max:50',
            'pais' => 'nullable|string|max:50',
            'observacion' => 'nullable|string',
            'estado' => 'nullable|string',
            'servicio' => 'nullable|string|max:250',
            'moneda' => 'nullable|string|max:25',
            'monto_total' => 'nullable|numeric',
            'fecha_emision' => 'nullable|date',
        ]);

        $invoice = Invoice::findOrFail($id);
        $invoice->update($validated);
        ($invoice);
    
        return redirect()->route('invoices')->with('success', 'Factura actualizada exitosamente');
    }
    

    public function destroy($id)
{
    $invoice = Invoice::findOrFail($id);
    $invoice->delete();

    return redirect()->route('invoices')->with('success', 'Factura eliminada exitosamente');
}
public function generatePDF($id)
{
    $invoice = Invoice::findOrFail($id);
    $itf_rate = 0.063; //
    $igv_rate=0.18; 

        // Calcular el subtotal antes del ITF
    $subtotal = round($invoice->monto_total / (1 + $itf_rate + $igv_rate), 2);
    
        // Calcular el ITF basado en el subtotal
    $itf_amount = round($subtotal * $itf_rate, 2);
    
        // Calcular el IGV basado en el subtotal
    $igv_amount = round($subtotal * $igv_rate, 2);    
    // Carga la vista del PDF con los datos calculados
    $pdf = PDF::loadView('invoice.pdf', compact('invoice', 'subtotal', 'itf_amount', 'igv_amount'));

    return $pdf->download('invoice_' . $invoice->numero_factura . '.pdf');
}

public function show($id)
{
    $invoice = Invoice::findOrFail($id);
    $itf_rate = 0.063; // 6.3% como decimal
    $igv_rate=0.18;

    // Calcular el subtotal antes de aplicar el ITF
    $subtotal = round($invoice->monto_total / (1 + $itf_rate + $igv_rate), 2);

    // Calcular el monto del ITF
    $itf_amount = round($subtotal * $itf_rate, 2);
    $igv_amount = round($subtotal * $igv_rate, 2);    

    return view('invoice.invoice-ver', compact('invoice', 'subtotal', 'itf_amount', 'igv_amount'));
}



}

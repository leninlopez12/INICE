<?php
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CertificadoAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

//rutas generales laude
Route::get('/', [PrincipalController::class, 'index'])->name('laude');

//nosotros
Route::get('/nosotros',[PrincipalController::class,'nosotros'])->name('nosotros');
Route::get('/privacidad',[PrincipalController::class,'privacidad'])->name('privacidad');
Route::get('/reclamaciones',[PrincipalController::class,'reclamaciones'])->name('reclamaciones');

Route::get('/cursos',[PrincipalController::class,'cursos'])->name('cursos');
Route::get('/cursos/ciencia-de-datos',[PrincipalController::class,'cienciadedatos'])->name('cienciadedatos');

//certificados
Route::get('/certificados',[HomeController::class,'pagina'])->name('pagina');

//SITEMAPS
Route::get('/sitemap.xml', function () {
    return Response::file(public_path('sitemap.xml'), ['Content-Type' => 'application/xml']);
});
//PROTEGIDO MIDDLEWARE
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/certificados-ad', [CertificadoAdminController::class, 'index'])->name('certificados-ad');
    Route::get('/certificado-crear', [CertificadoAdminController::class, 'create'])->name('certificado-create');
    Route::post('/certificado-crear', [CertificadoAdminController::class, 'store'])->name('certificado-store');
    Route::post('/buscar-dni', [CertificadoAdminController::class, 'buscarDni'])->name('buscar-dni');

    Route::get('/certificado-editar/{id}', [CertificadoAdminController::class, 'edit'])->name('certificado-editar');
    Route::put('/certificado-actualizar/{id}', [CertificadoAdminController::class, 'update'])->name('certificado-actualizar');
    Route::delete('/certificados/{id}', [CertificadoAdminController::class, 'destroy'])->name('certificado-eliminar');
    Route::post('/certificados/import', [CertificadoAdminController::class, 'importCsv'])->name('certificados.import');

    
    // INVOICE
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
    Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoice-editar');
    Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('invoice-actualizar');
    Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('invoice-destroy');
    Route::get('/invoices/{id}/pdf', [InvoiceController::class, 'generatePDF'])->name('invoice-pdf');
    Route::get('/invoice/{id}/ver', [InvoiceController::class, 'show'])->name('invoice-ver');
    
    
});

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar nueva factura') }}
        </h2>
    </x-slot>

    <div class="py-8 flex justify-center min-h-screen">
        <div class="max-w-6xl w-full bg-gray-900 p-6 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-bold text-white mb-6">Nueva Factura</h2>
            <form action="{{ route('invoices.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-4">
                    <div class="col-span-1">
                        <label class="block text-gray-300">Número de Factura</label>
                        <input type="text" name="numero_factura" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Número de Factura">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">Usuario</label>
                        <input type="text" name="usuario" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Usuario">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">ID/DNI/EI/PASS</label>
                        <input type="text" name="dni" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="DNI">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">País</label>
                        <input type="text" name="pais" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="País">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">Estado</label>
                        <select name="estado" class="form-control bg-gray-800 text-white rounded-md w-full">
                            <option value="" disabled selected>Seleccione un estado</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="emitido">Emitido</option>
                        </select>
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">Servicio</label>
                        <input type="text" name="servicio" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Servicio">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">Moneda</label>
                        <select name="moneda" class="form-control bg-gray-800 text-white rounded-md w-full">
                            <option value="" disabled selected>Seleccione una moneda</option>
                            <option value="$">Dólar</option>
                            <option value="S/">Soles</option>
                        </select>
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">Monto Total</label>
                        <input type="number" step="0.01" name="monto_total" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Monto Total">
                    </div>

                    <div class="col-span-1">
                        <label class="block text-gray-300">Fecha de Emisión</label>
                        <input type="date" name="fecha_emision" class="form-control bg-gray-800 text-white rounded-md w-full">
                    </div>
                    <div class="col-span-1 md:col-span-3">
                        <label class="block text-gray-300">Observación</label>
                        <textarea name="observacion" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Observación"></textarea>
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('invoices') }}" class="py-2 px-4 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                        Atrás
                    </a>
                    <button type="submit" class="btn-primary py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

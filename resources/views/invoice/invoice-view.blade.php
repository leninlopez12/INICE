<x-app-layout>
    <x-slot name="header">
    <h2 class="font-bold text-xl text-teal-600 leading-tight">
    {{ __('INVOICE') }}
</h2>


        <div class="mt-4 flex space-x-3">
        <a href="{{route('invoices.create')}}" class="inline-flex items-center px-5 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-900 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-300 active:bg-gray-900 disabled:opacity-25 transition">
            <div class="flex items-center space-x-3">
                <!-- Ícono de Excel con animación de salto constante -->
                <div class="w-8 h-8 bg-teal-600 rounded flex items-center justify-center p-1 animate-bounce">
                    <i class="fa-solid fa-plus text-white text-xl"></i>
                </div>
                <span>Registrar una factura </span>
            </div>
        </a>
    </div>
    </x-slot>

    <div class="py-8 flex justify-center min-h-screen">
        <div class="w-full bg-gray-900 p-6 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-bold text-white mb-6">Lista de Facturas</h2>
            <!-- Search form -->
            <form method="GET" action="{{ route('invoices') }}" class="mb-4 flex flex-col md:flex-row md:justify-between items-center space-y-4 md:space-y-0">
                <input type="text" name="search" placeholder="Buscar..." value="{{ request('search') }}" class="p-2 rounded-md w-full md:w-1/3 bg-gray-700 text-gray-300">
                <select name="perPage" onchange="this.form.submit()" class="p-2 rounded-md bg-gray-700 text-gray-300 w-full md:w-auto">
                    <option value="50" selected>50</option>
                    <option value="10" {{ request('perPage') == '10' ? 'selected' : '' }}>10</option>
                    <option value="20" {{ request('perPage') == '20' ? 'selected' : '' }}>20</option>
                    <option value="100" {{ request('perPage') == '100' ? 'selected' : '' }}>100</option>
                </select>
            </form>
            <!-- Table wrapper for responsiveness -->
            <div class="overflow-x-auto">
                <table class="w-full bg-gray-800 text-gray-300 border border-gray-700 rounded-lg">
                    <thead class="bg-teal-600 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">ID</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Numero Factura</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Usuario</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">DNI</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Servicio</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Estado</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Observación</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Monto Total</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                        <tr class="hover:bg-gray-700 transition duration-300 ease-in-out">
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $invoice->id }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $invoice->numero_factura }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $invoice->usuario }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $invoice->dni }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $invoice->servicio }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">
                                @if ($invoice->estado == 'emitido')
                                    <span class="inline-block px-4 py-1 text-white bg-green-500 rounded-full">Emitido</span>
                                @elseif ($invoice->estado == 'pendiente')
                                    <span class="inline-block px-2 py-1 text-white bg-yellow-500 rounded-full">Pendiente</span>
                                @else
                                    <span class="inline-block px-2 py-1 text-white bg-gray-500 rounded-full">Estado Desconocido</span>
                                @endif
                            </td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base whitespace-nowrap overflow-hidden text-ellipsis max-w-xs">{{ $invoice->observacion }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $invoice->monto_total }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 flex justify-center items-center space-x-2 text-center">
                                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                                    <a href="{{ route('invoice-editar', ['id' => $invoice->id]) }}" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 text-xs md:text-sm text-center">
                                        Editar
                                    </a>
                                    <form action="{{ route('invoice-destroy', ['id' => $invoice->id]) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete(this)" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 text-xs md:text-sm text-center">
                                            Eliminar
                                        </button>
                                    </form>
                                    <a href="{{ route('invoice-pdf', ['id' => $invoice->id]) }}" class="bg-green-500 text-white py-1 px-3 rounded-md hover:bg-green-600 text-xs md:text-sm text-center">
                                        PDF
                                    </a>
                                    <a href="{{ route('invoice-ver', ['id' => $invoice->id]) }}" class="bg-teal-500 text-white py-1 px-3 rounded-md hover:bg-teal-600 text-xs md:text-sm text-center">
                                        Ver
                                    </a>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination links -->
            <div class="mt-4">
                        {{ $invoices->withQueryString()->links() }}
                    </div>
        </div>
    </div>
</x-app-layout>

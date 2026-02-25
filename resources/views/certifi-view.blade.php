
<style>
    /* Animación de salto */
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    .animate-bounce {
        animation: bounce 1s infinite;
    }
</style>
<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('CERTIFICADOS') }}
    </h2>
    <div class="mt-4 flex space-x-3">
        <a href="{{route('certificado-create')}}" class="inline-flex items-center px-5 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-900 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-300 active:bg-gray-900 disabled:opacity-25 transition">
            <div class="flex items-center space-x-3">
                <!-- Ícono de Excel con animación de salto constante -->
                <div class="w-8 h-8 bg-sky-600 rounded flex items-center justify-center p-1 animate-bounce">
                    <i class="fa-solid fa-plus text-white text-xl"></i>
                </div>
                <span>Registrar</span>
            </div>
        </a>
        <form action="{{ route('certificados.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="inline-flex items-center space-x-3">
                <!-- CSV File Input (hidden, triggered by the button) -->
                <input type="file" name="csvFile" id="csvFile" accept=".csv" class="hidden" onchange="this.form.submit()">

                <!-- Button to Open File Selector -->
                <button type="button" onclick="document.getElementById('csvFile').click()" class="inline-flex items-center px-5 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-900 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-300 active:bg-gray-900 disabled:opacity-25 transition">
                    <div class="flex items-center space-x-3">
                        <!-- Excel Icon with Bounce Animation -->
                        <div class="w-8 h-8 bg-sky-600 rounded flex items-center justify-center p-1 animate-bounce">
                            <i class="fa-solid fa-file-csv text-white text-xl"></i>
                        </div>
                        <span>Importar</span>
                    </div>
                </button>
            </div>
        </form>
    </div>
</x-slot>


    <div class="py-8 flex justify-center min-h-screen">
        <div class="w-full bg-gray-900 p-6 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-bold text-white mb-6">Lista de Certificados</h2>

            <!-- Search form -->
            <form method="GET" action="{{ route('certificados-ad') }}" class="mb-4 flex flex-col md:flex-row md:justify-between items-center space-y-4 md:space-y-0">
                <input type="text" name="search" placeholder="Buscar..." value="{{ request('search') }}" class="p-2 rounded-md w-full md:w-1/3 bg-gray-700 text-gray-300">
                <select name="perPage" onchange="this.form.submit()" class="p-2 rounded-md bg-gray-700 text-gray-300 w-full md:w-auto">
                <option value="10" {{ request('perPage') == '10' ? 'selected' : '' }}>10</option>
                <option value="20" {{ request('perPage') == '20' ? 'selected' : '' }}>20</option>
                <option value="50" {{ request('perPage') == '50' ? 'selected' : '' }}>50</option>
                <option value="100" {{ request('perPage') == '100' ? 'selected' : '' }}>100</option>
                </select>
            </form>
 
            <!-- Table wrapper for responsiveness -->
            <div class="overflow-x-auto">
                <table class="w-full bg-gray-800 text-gray-300 border border-gray-700 rounded-lg">
                    <thead class="bg-sky-700 text-gray-200">
                        <tr>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">N°</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">DNI</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Apellidos</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Nombres</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">ID-Evento</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Evento</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Código</th>
                            <th class="py-3 px-4 text-left font-semibold text-sm md:text-base">Condición</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($certificates as $index => $certificate)
                        <tr class="hover:bg-gray-700 transition duration-300 ease-in-out">
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{$certificate->id }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $certificate->DNI }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm text-lg">{{ $certificate->APELLIDOS }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm text-lg">{{ $certificate->NOMBRES }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $certificate->ID_EVENTO }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 truncate max-w-md" title="{{ $certificate->EVENTO }}">{{ $certificate->EVENTO }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 text-sm md:text-base">{{ $certificate->CODIGO }}</td>
                            <td class="border-t border-gray-700 py-2 px-4 flex justify-center items-center space-x-2 text-center">
                                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                                    <a href="{{ route('certificado-editar', ['id' => $certificate->id]) }}" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 text-xs md:text-sm text-center">
                                        Editar
                                    </a>
                                    <form action="{{ route('certificado-eliminar', ['id' => $certificate->id]) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete(this)" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 text-xs md:text-sm text-center">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>

                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination links -->
            <div class="mt-4">
                {{ $certificates->withQueryString()->links() }}
            </div>
        </div>
    </div>

</x-app-layout>

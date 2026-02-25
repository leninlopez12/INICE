@extends('layouts.page')

@section('content')


<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-300 via-blue-200 to-blue-300 font-baloo px-6">
  <div class=" rounded-3xl  p-8 md:p-12 max-w-3xl w-full text-center transform transition-all duration-500 hover:scale-[1.02]">
    
    <!-- Imagen 3D del error -->
    <div class="relative mb-8">
      <img src="{{ asset('img/icon/error.png') }}" alt="Error 404"
           class="mx-auto w-72 md:w-96 drop-shadow-[0_20px_30px_rgba(0,0,0,0.15)] transition-transform duration-500 hover:-translate-y-2">
      
      <!-- Sombra de reflejo debajo -->
      <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-32 h-5 bg-black/10 rounded-full blur-md -z-10"></div>
    </div>

    <!-- Mensaje -->
    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-2 animate-pulse">¡Te equivocaste de página!</h2>
    <p class="text-lg md:text-xl text-gray-700 mb-6 leading-relaxed">No podemos encontrar lo que buscas,<br> pero no te preocupes, te llevamos de vuelta.</p>
    
    <!-- Botón de regreso -->
    <a href="{{ route('laude') }}"
       class="inline-block px-6 py-3 bg-cyan-600 hover:bg-cyan-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
      Volver a la Página Principal
    </a>
  </div>
</div>


@endsection
@push('js')



@endpush
@extends('layouts.page')

@section('title', 'Validación Certificados')

@push('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

        /* Animación para entrada letra por letra */
        .typing-effect {
            display: inline-block;
            overflow: hidden;
            border-right: 3px solid white;
            white-space: nowrap;
            animation: typing 6s steps(30, end) forwards;
        }
/* Animación para entrada letra del nombre de certificados tabla */
        @keyframes writingEffect {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }
/* Animación para entrada letra del nombre de certificados */

        .text-cursive {
            font-family: 'Dancing Script', cursive;
            overflow: hidden;
            display: inline-block;
            white-space: nowrap;
            border-right: 3px solid rgba(0, 0, 0, 0.7);  /* Simula el cursor */
            width: 0;
            animation: typing 4s steps(30) 1s forwards, blink 0.75s step-end infinite;
            text-transform: capitalize;
        }

        /* Animación de tipo máquina de escribir */
        @keyframes typing {
            to {
                width: 100%;
            }
        }
        /* Animación de titulo de certificados para arriba*/
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(100%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideInUp {
            animation: slideInUp 0.8s ease-out;
        }
    </style>

@endpush
@section('content')

<header class="relative min-h-screen flex items-center bg-gradient-to-b from-blue-950 to-indigo-950 overflow-hidden">

    <!-- Overlay sutil -->
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-16 w-full">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Texto -->
            <div class="text-center md:text-left mt-10 md:mt-0">
                <span class="inline-block mb-4 px-4 py-1 rounded-full text-sm tracking-wide 
                             bg-white/10 text-sky-300 border border-white/20">
                    Validación oficial
                </span>

                <h1 class="font-baloo text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight">
                    Consulta y verifica
                </h1>

                <h2 class="font-baloo text-4xl sm:text-5xl md:text-6xl font-bold text-sky-400 mt-2">
                    tus certificados
                </h2>

                <p class="mt-6 text-lg text-slate-300 max-w-xl">
                    Comprueba la autenticidad de certificados emitidos por nuestra institución
                    de forma rápida, segura y confiable
                </p>

                <div class="mt-10 flex justify-center md:justify-start gap-4">
                    <a href="{{ route('pagina') }}#validacion"
                       class="px-8 py-3 rounded-xl font-medium text-white
                              bg-sky-600 hover:bg-sky-500 transition">
                        Validar ahora
                    </a>

                    <a href="#info"
                       class="px-8 py-3 rounded-xl font-medium text-sky-300
                              border border-sky-400/40 hover:bg-white/10 transition">
                        Cómo funciona
                    </a>
                </div>
            </div>

            <div class="flex justify-center">

                <div class="relative w-full max-w-2xl">
                    <img 
                        src="{{ asset('img/certificadoindex2.png') }}" 
                        alt="Certificación Digital INICE"
                        class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl mx-auto rounded-3xl transform-gpu hover:rotate-x-3 hover:-rotate-y-3 hover:scale-105 transition-all duration-500"
                    />
                </div>

            </div>
            <!-- Imagen -->
            

        </div>
    </div>

    <!-- Degradado inferior para unión con la siguiente sección -->
</header >

    <!-- Sección Principal -->
    <div class="bg-white  flex flex-col space-y-10 md:space-y-0 md:space-x-0 w-full md:w-auto pb-20  mt-10 md:mt-20">
        <!-- Sección de Validación -->
        <div class="w-full max-w-7xl bg-white  rounded-xl  p-4 backdrop-blur-lg bg-opacity-80 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Validación por Código -->
                <div class="relative mb-10">

    <!-- Halo decorativo -->
    <div class="absolute inset-0 bg-gradient-to-r from-sky-300/30 via-blue-400/30 to-indigo-500/30 blur-2xl rounded-3xl"></div>

    <div id="validacion" class="relative bg-white/70 backdrop-blur-xl rounded-3xl p-8 border border-blue-500/50">

        <h3 class="text-center text-sm tracking-widest font-extrabold text-sky-700 mb-8">
            VALIDACIÓN DE CERTIFICADO
        </h3>

        <form action="{{ url('/certificados') }}#valid" method="get">

            <!-- Input -->
            <div class="relative mb-6">
                <label class="block text-xs uppercase tracking-wider text-slate-600 mb-2">
                    código único
                </label>

                <input
                    type="text"
                    name="codigo"
                    placeholder="ej. INICE-2026-XXXX"
                    class="w-full px-5 py-4 rounded-2xl bg-slate-50 text-slate-900 text-lg font-semibold outline-none border border-blue-400
                           focus:border-sky-500 focus:ring-4 focus:ring-sky-300/30 transition-all"
                />
            </div>

            <!-- Error -->
            @if (isset($error))
                <div class="mb-5 text-sm font-semibold text-red-600">
                    {{ $error }}
                </div>
            @endif

            <!-- Botón -->
            <button
                type="submit"
                class="relative w-full py-4 rounded-2xl font-extrabold text-lg text-white
                       bg-gradient-to-r from-sky-500 via-blue-600 to-indigo-600
                       transition-all duration-300 hover:scale-[1.02] focus:ring-4 focus:ring-indigo-400/40"
            >
                Validar autenticidad
            </button>

        </form>

    </div>

</div>


                <!-- Validación por DNI -->
                <!-- Validación por DNI -->
<div class="relative mb-10">

    <!-- Halo decorativo -->
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-300/30 via-sky-400/30 to-blue-500/30 blur-2xl rounded-3xl"></div>

    <div class="relative bg-white/70 backdrop-blur-xl rounded-3xl p-8 border border-cyan-500/50">

        <h3 class="text-center text-sm tracking-widest font-extrabold text-sky-700 mb-8">
            VALIDACIÓN POR DOCUMENTO
        </h3>

        <form method="GET" action="{{ route('pagina') }}#valid">

            <!-- Input DNI -->
            <div class="relative mb-6">
                <label class="block text-xs uppercase tracking-wider text-slate-600 mb-2">
                    documento de identidad
                </label>

                <input
                    type="text"
                    name="dni"
                    placeholder="ej. 12345678"
                    class="w-full px-5 py-4 rounded-2xl bg-slate-50 text-slate-900 text-lg font-semibold outline-none
                           border border-cyan-500 focus:border-sky-500 focus:ring-4 focus:ring-sky-300/30 transition-all"
                />
            </div>

            <!-- Error -->
            @if (isset($error_dni))
                <div class="mb-5 text-sm font-semibold text-red-600">
                    {{ $error_dni }}
                </div>
            @endif

            <!-- Botón -->
            <button
                type="submit"
                class="relative w-full py-4 rounded-2xl font-extrabold text-lg text-white
                       bg-gradient-to-r from-cyan-500 via-sky-600 to-blue-700
                       transition-all duration-300 hover:scale-[1.02] focus:ring-4 focus:ring-blue-400/40"
            >
                Buscar Certificados
            </button>

        </form>

    </div>

</div>


                
            </div>

        </div>

        <!-- Sección que cambia dependiendo de la consulta -->
        <div id="valid"  class="font-baloo">
            @if (isset($certificado)) <!-- Resultado por código -->
            <div class="bg-white text-black flex justify-center relative overflow-hidden  dark:text-white p-4">
                <div class="absolute inset-0 bg-white "></div>
              
                <!-- Resultado de validación -->
                <div class=" relative mt-8 p-10 bg-gradient-to-br from-white to-gray-100 shadow-2xl rounded-3xl border border-cyan-500 backdrop-blur-lg w-full lg:w-3/5  text-center overflow-hidden flex flex-col items-center justify-center animate__animated animate__fadeIn animate__delay-1s dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800 dark:border-cyan-500">
                  <div class="absolute inset-0 bg-cyan-500 opacity-20 blur-3xl dark:bg-blue-500 dark:opacity-20"></div>
                  <div class="relative z-10 flex flex-col items-center animate__animated animate__fadeInUp">
                    <div class="w-24 h-24 flex items-center justify-center  mb-6 overflow-hidden">
                        <img src="{{ asset('img/icon/medal.png') }}" alt="Icono" class="w-24 h-24 object-cover">
                    </div>

                    <h2 class="text-4xl font-extrabold text-black mb-3 animate-pulse dark:text-white">Certificado Auténtico</h2>
                    <p class="text-gray-800 text-xl dark:text-gray-300">Nombres y Apellidos</p>
                    <p class="text-5xl font-bold bg-gradient-to-r from-cyan-400 to-blue-600 text-transparent bg-clip-text dark:bg-gradient-to-r dark:from-blue-500 dark:to-cyan-600 dark:text-transparent">
                        {!! nl2br(e($nombres)) !!} {!! nl2br(e($apellidos)) !!}
                    </p>
                    <p class="text-gray-700 mt-4 text-lg dark:text-gray-400">Por el desarrollo de:</p>
                    <p class="text-3xl font-semibold text-cyan-400 dark:text-cyan-500">{{ $certificado->EVENTO }}</p>

                    <div class="w-full max-w-lg mx-auto mt-6">
                        <div onclick="openModal('{{ $certificado->ENLACE_1 }}')" class="group bg-white  p-8 rounded-3xl shadow-lg transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl cursor-pointer flex flex-col items-center text-center relative overflow-hidden">
                            <!-- Efecto Brillante -->
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-blue-500 opacity-10 group-hover:opacity-30 transition-all duration-300 rounded-3xl"></div>
                            <!-- Ícono con fondo dinámico -->
                            <div class="w-32 h-32 flex items-center justify-center text-white transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <img src="{{ asset('img/icon/copy.png') }}" alt="Icono" class="w-32 h-32 object-cover">
                            </div>
                            <!-- Texto -->
                            <h3 class="mt-6 text-3xl font-bold text-gray-900 dark:text-white">Certificado</h3>
                            <p class="text-gray-600 dark:text-gray-400 mt-3 text-lg">Haz clic para ver y descargar tu certificado.</p>
                        </div>
                    </div>
                    
                    <div id="webModal" class="fixed inset-0 bg-black bg-opacity-75 hidden items-center justify-center z-50 overflow-auto">
                        <div class="bg-white rounded-lg shadow-lg p-4 w-full h-full relative flex flex-col justify-between">
    
                        <!-- Botón de cerrar -->
                        <button onclick="closeModal()" class="absolute top-4 right-4 text-xl text-gray-700 hover:text-gray-900">
                            <i class="fa-solid fa-times"></i>
                        </button>
    
                        <!-- Contenedor del iframe para cargar la página web -->
                        <div id="webViewer" class="w-full h-full">
                            <iframe id="webContent" class="w-full h-full border-none" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
    
                        <!-- Controles de Navegación (Opcional, pero si lo necesitas puedes añadir aquí) -->
                        <div class="absolute bottom-8 left-0 w-full p-4 flex justify-between items-center">
                            <button onclick="refreshContent()" class="bg-gray-700 text-white py-2 px-4 rounded-lg text-lg hover:bg-gray-600">
                            <i class="fa-solid fa-sync"></i> Recargar
                            </button>
                        </div>
                        </div>
                    </div>
                    
                  </div>

                </div>

            </div>

            @elseif (isset($certificados)) <!-- Resultado por DNI -->
            <div class="bg-white p-4 mt-6 rounded-xl shadow-2xl w-full  lg:max-w-7xl mx-auto ">
            
                <!-- Mostrar el nombre del usuario -->
                @if (isset($nombreCompleto))
                <div class="mt-6 flex justify-center">
                    <div class="relative bg-white/50 text-center backdrop-blur-lg text-cyan-800 px-8 py-4 rounded-lg text-5xl font-bold tracking-wide  border border-transparent  transition-all duration-300">
                        <span class="relative z-10">{{ $nombreCompleto }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-cyan-300 to-purple-500 dark:from-blue-700 dark:to-purple-700 opacity-30 dark:opacity-20 blur-lg"></div>
                    </div>
                </div>
            @endif

                <!-- Contenedor de tarjetas -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($certificados as $index => $cert)
                    <div class="relative bg-white dark:bg-gray-800 shadow-lg rounded-2xl overflow-hidden p-6 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <!-- Cinta del código -->
                        <div class="absolute top-0 left-0 bg-gradient-to-r from-cyan-500 to-blue-600 text-white text-md font-bold px-4 py-1 rounded-br-xl flex items-center space-x-2">
                            <span id="codigoTexto-{{ $cert->CODIGO }}">Código: {{ $cert->CODIGO }}</span>
                            <button onclick="copiarCodigo('{{ $cert->CODIGO }}')" class="ml-2 focus:outline-none">
                                <i class="fa-regular fa-copy text-white text-lg hover:text-gray-200 transition duration-200"></i>
                            </button>
                        </div>
                        <!-- Mensaje flotante de "Código copiado" -->
                        <div id="mensajeCopiado" class="fixed bottom-0 right-0 bg-white/50 dark:bg-gray-800/80 text-black dark:text-white 
                                    px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 backdrop-blur-lg flex items-center space-x-2">
                            <i class="fa-solid fa-check-circle text-green-500"></i> 
                            <span>Código copiado</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-300 to-purple-500 dark:from-blue-700 dark:to-purple-700 opacity-30 dark:opacity-20 blur-lg"></div>
                        </div>
                        
                        <!-- Botón flotante de confirmación -->
                        <div class="fixed bottom-0 right-0 px-4 py-2 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 
                            bg-white/30 backdrop-blur-md text-gray-900 dark:bg-gray-800/50 dark:text-white border border-white/20 dark:border-gray-600/40">
                            <i class="fa-solid fa-check-circle"></i> Código copiado
                        </div>
            
                        <!-- Icono decorativo -->
                        <div class="flex items-center justify-center mb-4 mt-5">
                            <div class="w-24 h-24  flex items-center justify-center">
                                <img src="{{ asset('img/icon/notebook.png') }}" alt="Icono" class="w-24 h-24 object-cover">
                            </div>
                        </div>
            
                        <!-- Contenido de la tarjeta -->
                        <h5 class="text-xl font-bold text-gray-900 dark:text-white text-center">{{ $cert->EVENTO }}</h5>
                        <p class="text-gray-600 dark:text-gray-300 mt-2 text-center">
                            Año de certificado: <span class="font-semibold">{{ $cert->ANIO }}</span>
                        </p>
            
                        <!-- Botón interactivo -->
                        <div class="mt-4 flex justify-center">
                            <button onclick="buscarPorCodigo('{{ $cert->CODIGO }}')" 
                                class="bg-cyan-500 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-cyan-600 transition-all duration-300">
                            Ver Certificado
                        </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            
                <!-- Mensaje cuando no hay resultados -->
                @if(count($certificados) == 0)
                    <div class="mt-6 text-center text-lg text-gray-600 dark:text-gray-400">
                        <p>No se encontraron resultados para el DNI ingresado.</p>
                    </div>
                @endif
            </div>
            
            

            @else <!-- Sección promocional si no hay resultados -->
            <div class="relative w-full p-4 max-w-3xl mx-auto">
                <img src="{{ asset('img/certificado.webp') }}" alt="Certificado" class="w-full h-auto object-cover rounded-lg">
            </div>

            @endif
        </div>


    </div>

    <script>
        function buscarPorCodigo(codigo) {
            // Redirigir a la misma página con el código en la URL
            window.location.href = `{{ url('/certificados') }}?codigo=${codigo}#valid`;
        }
    </script>
    <script>
        function copiarCodigo(codigo) {
            navigator.clipboard.writeText(codigo).then(() => {
                let mensaje = document.getElementById("mensajeCopiado");
                mensaje.classList.remove("opacity-0");
                mensaje.classList.add("opacity-100");
    
                setTimeout(() => {
                    mensaje.classList.remove("opacity-100");
                    mensaje.classList.add("opacity-0");
                }, 2000);
            });
        }
    </script>
    
    <script>
        // Función para abrir el modal y cargar la URL dentro del iframe
        function openModal(url) {
          const modal = document.getElementById('webModal');
          modal.classList.remove('hidden'); // Mostrar el modal
    
          const iframe = document.getElementById('webContent');
          iframe.src = url; // Cargar la URL proporcionada en el iframe
        }
    
        // Función para cerrar el modal
        function closeModal() {
          const modal = document.getElementById('webModal');
          modal.classList.add('hidden'); // Ocultar el modal
        }
    
        // Función para recargar el iframe (si es necesario)
        function refreshContent() {
          const iframe = document.getElementById('webContent');
          iframe.contentWindow.location.reload();
        }
      </script>
@endsection

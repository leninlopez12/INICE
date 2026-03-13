@extends('layouts.page')

@section('title', '')

@push('css')

@endpush   
@section('content')

<section class="font-baloo relative min-h-screen overflow-hidden bg-gradient-to-br from-indigo-950 via-blue-900 to-purple-950">
  
  <!-- Fondo decorativo 3D -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-20 left-10 w-72 h-72 bg-blue-600/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 py-24 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
    
    <!-- Texto -->
    <div class="text-center lg:text-left space-y-6">
      <span class="inline-block px-4 py-1 text-sm font-medium tracking-wide text-blue-300 bg-blue-400/10 rounded-full">
        INICE Perú
      </span>

      <h1 class="text-4xl md:text-5xl xl:text-6xl font-extrabold text-white leading-tight">
        Instituto de Innovación e Impulso de la
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
          Ciencia Educativa
        </span>
      </h1>

      <h2 class="text-xl md:text-2xl text-blue-200 font-semibold">
        Impulsa tu desarrollo con cursos de formación continua
      </h2>

      <p class="text-blue-100/80 max-w-xl mx-auto lg:mx-0">
        Educación moderna y formación orientada al futuro 
      </p>

      <!-- Botones -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
        <a href="{{ route('laude') }}#cursosdestacados"
          class="px-8 py-4 rounded-xl font-semibold text-white bg-gradient-to-r from-blue-500 to-indigo-600 shadow-xl hover:scale-105 transition-transform">
          Explorar cursos
        </a>

        <a href="{{ route('pagina') }}"
          class="px-8 py-4 rounded-xl font-semibold text-blue-300 border border-blue-400/30 backdrop-blur hover:bg-blue-400/10 transition">
          Validar certificado
        </a>
      </div>
    </div>

    <!-- Imagen principal -->
<div class="flex justify-center">
    <div class="relative w-full max-w-2xl">
        <img 
            src="{{ asset('img/students.png') }}" 
            alt="Certificación Digital INICE"
            class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl mx-auto rounded-3xl transform-gpu hover:rotate-x-3 hover:-rotate-y-3 hover:scale-105 transition-all duration-500"
        />
    </div>
</div>



  </div>
</section>

<section class="font-baloo relative py-28 bg-gradient-to-b from-white via-blue-50 to-indigo-50 overflow-hidden">

  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-10 right-20 w-72 h-72 bg-indigo-300/30 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

    <h2 class="text-3xl md:text-6xl font-extrabold text-slate-800">
      ¿Qué es <span class="text-rose-500">INICE Perú</span>?
    </h2>

    <p class="mt-6 text-md md:text-xl text-slate-600 max-w-3xl mx-auto">
      Somos una institución educativa orientada a la innovación y al impulso de la ciencia educativa,
      dedicada a ofrecer formación moderna, certificaciones verificables y experiencias digitales de aprendizaje
    </p>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-10">

      <div class="group perspective-[1000px]">
        <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-200 transform-gpu transition-all duration-500 group-hover:-translate-y-3 group-hover:rotate-x-3">
          <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/buld.png') }}" 
                    alt="Icono innovación"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-slate-800">Innovación Educativa</h3>
          <p class="mt-3 text-md text-slate-600">
            Metodologías modernas y enfoque tecnológico a la educación actual
          </p>
        </div>
      </div>

      <div class="group perspective-[1000px]">
        <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-200 transform-gpu transition-all duration-500 group-hover:-translate-y-3 group-hover:rotate-x-3">
           <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/constancia.png') }}" 
                    alt="formación academica"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-slate-800">Formación Certificada</h3>
          <p class="mt-3 text-md text-slate-600">
            Certificaciones digitales con validación por QR y código único
          </p>
        </div>
      </div>

      <div class="group perspective-[1000px]">
        <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-200 transform-gpu transition-all duration-500 group-hover:-translate-y-3 group-hover:rotate-x-3">
           <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/computer.png') }}" 
                    alt="Experiencia Digital"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-slate-800">Experiencia Digital</h3>
          <p class="mt-3 text-md text-slate-600">
            Aula virtual moderna accesible desde cualquier dispositivo
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<section id="cursos" class="font-baloo relative py-28 bg-gradient-to-b from-blue-950 to-indigo-950 overflow-hidden">
  
  <!-- Fondo decorativo -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-32 left-20 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6">
    
    <!-- Título -->
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-4xl md:text-6xl font-extrabold text-white">
        Nuestra <span class="text-blue-400">Oferta Educativa</span>
      </h2>
      <p class="mt-5 text-blue-100/80 text-lg">
        Cursos y certificaciones diseñados para el desarrollo profesional y académico
      </p>
    </div>

    <!-- Cards -->
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Card 1 -->
      <div class="group perspective-[1000px]">
        <div class="h-full bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-7 shadow-xl transform-gpu transition-all duration-500 group-hover:-translate-y-4 group-hover:rotate-x-3">
           <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/notebook.png') }}" 
                    alt="Cursos Especializados"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-white">
            Cursos Especializados
          </h3>
          <p class="mt-3 text-md text-blue-100/70">
            Formación enfocada en áreas clave del conocimiento y la práctica profesional
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group perspective-[1000px]">
        <div class="h-full bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-7 shadow-xl transform-gpu transition-all duration-500 group-hover:-translate-y-4 group-hover:rotate-x-3">
          <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/constancia.png') }}" 
                    alt="INICE peru"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-white">
            Certificaciones Digitales
          </h3>
          <p class="mt-3 text-md text-blue-100/70">
            Certificados válidos con código único y verificación mediante QR
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group perspective-[1000px]">
        <div class="h-full bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-7 shadow-xl transform-gpu transition-all duration-500 group-hover:-translate-y-4 group-hover:rotate-x-3">
          <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/computer.png') }}" 
                    alt="INICE perú"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-white">
            Modalidad Virtual
          </h3>
          <p class="mt-3 text-md text-blue-100/70">
            Acceso flexible desde cualquier dispositivo, en cualquier momento
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="group perspective-[1000px]">
        <div class="h-full bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-7 shadow-xl transform-gpu transition-all duration-500 group-hover:-translate-y-4 group-hover:rotate-x-3">
          <div class="w-20 h-20 mb-6 mx-auto rounded-xl 
                flex items-center justify-center">
                <img 
                    src="{{ asset('img/icon/medal.png') }}" 
                    alt="INICE perú"
                    class="w-20 h-20 object-contain"
                >
            </div>
          <h3 class="text-xl font-semibold text-white">
            Enfoque Profesional
          </h3>
          <p class="mt-3 text-md text-blue-100/70">
            Contenidos diseñados por especialistas y orientados al mercado actual
          </p>
        </div>
      </div>

    </div>

    <!-- CTA -->
    <div class="mt-20 text-center">
      <a href="{{ route('cursos') }}"
        class="inline-block px-10 py-4 rounded-xl font-semibold text-white bg-gradient-to-r from-blue-500 to-indigo-600 shadow-xl hover:scale-105 transition-transform">
        Ver todos los cursos
      </a>
    </div>

  </div>
</section>

<section class=" font-baloo relative py-32 bg-gradient-to-b from-blue-50 to-indigo-50 overflow-hidden">

    <!-- FONDO SUAVE -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(59,130,246,0.15),transparent_60%)]"></div>

    <div class="relative max-w-7xl mx-auto px-6 md:px-10">

        <!-- TITULO -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-semibold text-blue-900 tracking-tight">
                Programas Académicos
            </h2>
            <div class="mt-6 mx-auto w-24 h-[2px] bg-blue-300 rounded-full"></div>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- CARD BASE -->
            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-emerald-400
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:rotate-x-4">

                    <div class="absolute inset-0 rounded-2xl bg-emerald-100 opacity-0 group-hover:opacity-100 transition"></div>

                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Tecnología e Informática
                    </h3>
                </div>
            </div>

            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-violet-400
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:-rotate-x-4">

                    <div class="absolute inset-0 rounded-2xl bg-violet-100 opacity-0 group-hover:opacity-100 transition"></div>

                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Marketing
                    </h3>
                </div>
            </div>

            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-amber-400
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:rotate-x-4">

                    <div class="absolute inset-0 rounded-2xl bg-amber-100 opacity-0 group-hover:opacity-100 transition"></div>

                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Gestión Pública
                    </h3>
                </div>
            </div>

            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-sky-400
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:-rotate-x-4">

                    <div class="absolute inset-0 rounded-2xl bg-sky-100 opacity-0 group-hover:opacity-100 transition"></div>

                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Pedagogía
                    </h3>
                </div>
            </div>

            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-red-400
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:rotate-y-4">

                    <div class="absolute inset-0 rounded-2xl bg-red-100 opacity-0 group-hover:opacity-100 transition"></div>
                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Educación
                    </h3>
                </div>
            </div>

            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-cyan-400
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:-rotate-y-4">

                    <div class="absolute inset-0 rounded-2xl bg-cyan-100 opacity-0 group-hover:opacity-100 transition"></div>
                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Administración
                    </h3>
                </div>
            </div>

            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-orange-500
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:rotate-y-4">

                    <div class="absolute inset-0 rounded-2xl bg-orange-200 opacity-0 group-hover:opacity-100 transition"></div>

                    <h3 class="relative text-lg font-semibold text-blue-900 text-center">
                        Ingeniería
                    </h3>
                </div>
            </div>

            <!-- MAS PROGRAMAS -->
            <div class="group perspective-[1200px]">
                <div class="relative rounded-2xl px-8 py-12 bg-white
                    border border-dashed border-rose-300
                    transition-all duration-500 transform-gpu
                    group-hover:-translate-y-3 group-hover:rotate-x-3">

                    <div class="absolute inset-0 rounded-2xl bg-rose-50 opacity-0 group-hover:opacity-100 transition"></div>

                    <h3 class="relative text-lg font-semibold text-rose-500 text-center">
                        Y más programas…
                    </h3>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="cursosdestacados" class="font-baloo relative py-32 bg-gradient-to-b from-blue-950 to-indigo-950 overflow-hidden">

    <!-- GLOWS SUAVES -->
    <div class="absolute -top-32 left-1/3 w-[480px] h-[480px] bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -right-40 w-[520px] h-[520px] bg-indigo-500/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 md:px-10">

        <!-- TITULO -->
        <div class="text-center mb-24">
            <h2 class="text-4xl md:text-6xl font-extrabold text-white">
        Cursos <span class="text-blue-400">Destacados</span>
      </h2>
            <p class="mt-6 text-blue-100/80 max-w-2xl mx-auto text-2xl">
                Formación académica orientada al desarrollo profesional y la innovación educativa
            </p>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">


                         <!-- CARD -->
            <div class="group perspective-[1200px]">
                <div class="relative h-full rounded-3xl overflow-hidden
                    bg-white/10 backdrop-blur-xl
                    border border-white/20
                    shadow-[0_30px_80px_rgba(0,0,0,0.35)]
                    transform-gpu transition-all duration-500
                    group-hover:-translate-y-5 group-hover:-rotate-x-6">

                    <img src="{{ asset('img/cursos/nuevos/QUECHUA.webp') }}"
                         alt="Curso INICE"
                         class="w-full h-72 object-cover">

                    <div class="p-6 space-y-4 text-white">
                        <h3 class="text-lg font-semibold">
                            QUECHUA Básico
                        </h3>
                        <a href="{{ route('quechuab') }}" class="inline-block text-md font-medium text-blue-300 hover:text-blue-200">
                            Ver curso →
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="group perspective-[1200px]">
                <div class="relative h-full rounded-3xl overflow-hidden
                    bg-white/10 backdrop-blur-xl
                    border border-white/20
                    shadow-[0_30px_80px_rgba(0,0,0,0.35)]
                    transform-gpu transition-all duration-500
                    group-hover:-translate-y-5 group-hover:rotate-x-6">

                    <img src="{{ asset('img/cursos/nuevos/ofimaticaavanzada.webp') }}"
                         alt="Curso INICE"
                         class="w-full h-72 object-cover">

                    <div class="p-6 space-y-4 text-white">
                        <h3 class="text-lg font-semibold">
                            Ofimática Avanzada
                        </h3>
                        <a href="#" class="inline-block text-md font-medium text-blue-300 hover:text-blue-200">
                            Ver curso →
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="group perspective-[1200px]">
                <div class="relative h-full rounded-3xl overflow-hidden
                    bg-white/10 backdrop-blur-xl
                    border border-white/20
                    shadow-[0_30px_80px_rgba(0,0,0,0.35)]
                    transform-gpu transition-all duration-500
                    group-hover:-translate-y-5 group-hover:-rotate-x-6">

                    <img src="{{ asset('img/cursos/nuevos/programacion.webp') }}"
                         alt="Curso INICE"
                         class="w-full h-72 object-cover">

                    <div class="p-6 space-y-4 text-white">
                        <h3 class="text-lg font-semibold">
                            Programación para docentes
                        </h3>
                        <a href="{{ route('cursos') }}" class="inline-block text-md font-medium text-blue-300 hover:text-blue-200">
                            Ver curso →
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD -->
            <div class="group perspective-[1200px]">
                <div class="relative h-full rounded-3xl overflow-hidden
                    bg-white/10 backdrop-blur-xl
                    border border-white/20
                    shadow-[0_30px_80px_rgba(0,0,0,0.35)]
                    transform-gpu transition-all duration-500
                    group-hover:-translate-y-5 group-hover:rotate-x-6">

                    <img src="{{ asset('img/cursos/nuevos/adminsistemas.webp') }}"
                         alt="Curso INICE"
                         class="w-full h-72 object-cover">

                    <div class="p-6 space-y-4 text-white">
                        <h3 class="text-lg font-semibold">
                            Administración de Sistemas Informáticos
                        </h3>
                        <a href="#" class="inline-block text-md font-medium text-blue-300 hover:text-blue-200">
                            Ver curso →
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<section id="validar" class="font-baloo relative py-28 bg-gradient-to-b from-white via-emerald-50 to-blue-50 overflow-hidden">

  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-24 left-10 w-72 h-72 bg-emerald-300/30 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

    <div>
      <h2 class="text-4xl md:text-6xl font-extrabold text-slate-800">
        Certificados <span class="text-emerald-600">100% Verificables</span>
      </h2>

      <p class="mt-4 text-slate-600 max-w-xl text-xl">
        Todos nuestros certificados cuentan con validación mediante código único y QR
      </p>

      <ul class="mt-6 space-y-3 text-slate-600 text-xl">
        <li>✔ Código único</li>
        <li>✔ Código QR</li>
        <li>✔ Verificación pública</li>
        <li>✔ Seguridad institucional</li>
      </ul>

      <a href="{{ route('pagina') }}" class=" text-xl inline-block mt-8 px-8 py-4 rounded-xl text-white font-semibold bg-gradient-to-r from-emerald-500 to-green-600 shadow-xl hover:scale-105 transition">
        Validar certificado
      </a>
    </div>

    <div class="flex justify-center">
<div class="relative flex items-center justify-center h-full">

<img 
src="{{ asset('img/certificadocoursee.png') }}"
class="w-full max-w-xl h-auto object-contain 
transition duration-700 ease-out 
hover:scale-105 animate-float"
/>

</div>
    </div>

  </div>
</section>


<section class="font-baloo relative py-28 bg-gradient-to-b from-blue-950 to-indigo-950 overflow-hidden">

  <!-- Fondo decorativo -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-20 left-16 w-72 h-72 bg-indigo-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-24 right-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

    <!-- Mockup Aula Virtual -->
    <div class="flex justify-center">
        <div class="relative w-full max-w-2xl">
            <img 
                src="{{ asset('img/aulavirtual.png') }}" 
                alt="aulavirtual INICE"
                class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl mx-auto rounded-3xl transform-gpu hover:rotate-x-3 hover:-rotate-y-3 hover:scale-105 transition-all duration-500"
            />
        </div>
    </div>

    <!-- Texto -->
    <div class="space-y-6">
      <h2 class="text-4xl md:text-6xl font-extrabold text-white">
        Aula <span class="text-blue-400">Virtual Moderna</span>
      </h2>

      <p class="text-blue-100/80 max-w-xl text-xl">
        Nuestra plataforma digital está diseñada para ofrecer una experiencia de aprendizaje intuitiva,
        dinámica y accesible desde cualquier lugar
      </p>

      <ul class="space-y-4 text-xl">
        <li class="flex items-center gap-3 text-blue-100/80">
          <span class="text-blue-400">✔</span> Plataforma intuitiva y moderna
        </li>
        <li class="flex items-center gap-3 text-blue-100/80">
          <span class="text-blue-400">✔</span> Acceso 24/7 desde cualquier dispositivo
        </li>
        <li class="flex items-center gap-3 text-blue-100/80">
          <span class="text-blue-400">✔</span> Seguimiento de avance académico
        </li>
        <li class="flex items-center gap-3 text-blue-100/80">
          <span class="text-blue-400">✔</span> Integración con certificaciones digitales
        </li>
      </ul>

      <div class="pt-6">
        <a href="#"
          class="text-xl inline-block px-8 py-4 rounded-xl font-semibold text-white bg-gradient-to-r from-blue-500 to-indigo-600 shadow-xl hover:scale-105 transition-transform">
          Acceder al aula virtual
        </a>
      </div>
    </div>

  </div>
</section>
<section class="font-baloo relative py-28 bg-gradient-to-b from-white via-indigo-50 to-blue-50 overflow-hidden">

  <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">

    <h2 class="text-4xl md:text-6xl font-extrabold text-slate-800">
      Respaldo <span class="text-indigo-600">Institucional</span>
    </h2>

    <p class="mt-6 text-slate-600 max-w-2xl mx-auto text-xl">
      Convenios y alianzas que fortalecen nuestra propuesta académica
    </p>

<div class="mt-16 grid grid-cols-1 sm:grid-cols-2 gap-12 max-w-4xl mx-auto">

    <!-- FUNDACION EDUCATIVA ANDINA -->
    <div class="group perspective-[1000px]">
        <div class="relative h-24 rounded-2xl bg-white
            border border-blue-300
            flex items-center justify-center
            transition-all duration-500 transform-gpu
            group-hover:-translate-y-2 group-hover:rotate-x-3">

            <div class="absolute inset-0 rounded-2xl bg-blue-50 opacity-0 group-hover:opacity-100 transition"></div>

            <span class="relative text-lg md:text-xl font-semibold tracking-wide text-blue-800">
                Fundación Educativa Andina
            </span>
        </div>
    </div>

    <!-- SEGUIMOS AVANZANDO PERÚ -->
    <div class="group perspective-[1000px]">
        <div class="relative h-24 rounded-2xl bg-white
            border border-indigo-300
            flex items-center justify-center
            transition-all duration-500 transform-gpu
            group-hover:-translate-y-2 group-hover:-rotate-x-3">

            <div class="absolute inset-0 rounded-2xl bg-indigo-50 opacity-0 group-hover:opacity-100 transition"></div>

            <span class="relative text-lg md:text-xl font-medium tracking-widest text-indigo-800 uppercase">
                Seguimos Avanzando Perú
            </span>
        </div>
    </div>
    <div class="group perspective-[1000px]">
        <div class="relative h-24 rounded-2xl bg-white
            border border-indigo-300
            flex items-center justify-center
            transition-all duration-500 transform-gpu
            group-hover:-translate-y-2 group-hover:-rotate-x-3">

            <div class="absolute inset-0 rounded-2xl bg-indigo-50 opacity-0 group-hover:opacity-100 transition"></div>

            <span class="relative text-lg md:text-xl font-medium tracking-widest text-indigo-800 uppercase">
                Centro de Actualización Docente
            </span>
        </div>
    </div>

      <div class="group perspective-[1000px]">
        <div class="relative h-24 rounded-2xl bg-white
            border border-blue-300
            flex items-center justify-center
            transition-all duration-500 transform-gpu
            group-hover:-translate-y-2 group-hover:rotate-x-3">

            <div class="absolute inset-0 rounded-2xl bg-blue-50 opacity-0 group-hover:opacity-100 transition"></div>

            <span class="relative text-lg md:text-xl font-semibold tracking-wide text-blue-800">
                Centro Peruano de Desarrollo Profesional - Sede PUNO
            </span>
        </div>
    </div>

</div>


  </div>
</section>


<section class="font-baloo relative py-32 bg-gradient-to-b from-blue-950 to-indigo-950 overflow-hidden">

  <!-- Fondo decorativo -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-20 left-20 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-24 right-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">

    <h2 class="text-4xl md:text-6xl font-extrabold text-white">
      Somos <span class="text-rose-500">INICE Perú</span>
    </h2>

    <p class="mt-6 text-blue-100/80 text-2xl">
      Impulsamos la ciencia educativa mediante formación moderna,
      innovación tecnológica y certificaciones confiables,
      contribuyendo al desarrollo académico y profesional
    </p>

    <div class="mt-12">
      <a href="#"
        class="text-2xl inline-flex items-center justify-center px-12 py-5 rounded-2xl text-lg font-semibold text-white bg-gradient-to-r from-blue-500 to-indigo-600 shadow-2xl hover:scale-105 transition-transform">
        Inscríbete y comienza hoy
      </a>
    </div>

  </div>
</section>

@endsection
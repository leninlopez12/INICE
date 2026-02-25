@extends('layouts.page')

@section('title', 'Nosotros')

@push('css')



@endpush   
@section('content')

<header class=" font-baloo relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-950">
    <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_top,_#60a5fa_0%,_transparent_60%)]"></div>

    <div class="relative z-10 text-center px-6">
      <h1 class="text-4xl md:text-5xl xl:text-6xl font-extrabold text-white leading-tight">
        Instituto de Innovación e Impulso de la <br>
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
          Ciencia Educativa
        </span>
      </h1>
        <p class="mt-4 text-lg sm:text-xl text-blue-200 max-w-2xl mx-auto">
            “Educación moderna, innovación constante y formación con propósito”
        </p>
        <div class="mx-auto mt-6 h-1 w-24 rounded-full bg-gradient-to-r from-sky-400 to-indigo-400"></div>
    </div>
</header>


<section class="font-baloo relative py-28 bg-white">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900">
                ¿Quiénes somos?
            </h2>
            <div class="mt-4 mx-auto w-32 h-1 bg-indigo-600 rounded-full"></div>
        </div>

        <div class="group perspective-[1200px]">
            <div class="relative bg-white rounded-3xl p-10 md:p-14
                border border-blue-200
                transition-all duration-500 transform-gpu
                group-hover:-translate-y-3 group-hover:rotate-x-3">

                <div class="absolute inset-0 rounded-3xl bg-blue-50 opacity-0 group-hover:opacity-100 transition"></div>

                <p class="relative text-lg md:text-2xl text-slate-700 leading-relaxed text-justify">
                    INICE Perú es una institución educativa orientada a la innovación y al impulso de la
                    ciencia educativa. Integramos educación, tecnología y formación continua para
                    desarrollar profesionales capaces de responder a los desafíos académicos,
                    laborales y sociales del entorno actual.
                </p>

            </div>
        </div>

    </div>
</section>

<section class="font-baloo relative py-32 bg-gradient-to-b from-blue-950 to-indigo-950 overflow-hidden">

    <div class="absolute top-24 left-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16">

        <!-- MISIÓN -->
        <div class="group perspective-[1200px]">
            <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-12
                border border-blue-300/30
                transition-all duration-500 transform-gpu
                group-hover:-translate-y-4 group-hover:rotate-y-4">

                <div class="absolute inset-0 rounded-3xl bg-blue-500/10 opacity-0 group-hover:opacity-100 transition"></div>

                <h3 class="relative text-3xl md:text-4xl font-extrabold text-blue-300 mb-6">
                    Misión
                </h3>

                <p class="relative text-lg md:text-xl text-blue-100/80 leading-relaxed text-justify">
                    Proporcionar formación educativa de calidad, con enfoque innovador y tecnológico,
                    que fortalezca las competencias académicas y profesionales de nuestros estudiantes,
                    contribuyendo a su desarrollo integral y al progreso de la sociedad.
                </p>

            </div>
        </div>

        <!-- VISIÓN -->
        <div class="group perspective-[1200px]">
            <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-12
                border border-indigo-300/30
                transition-all duration-500 transform-gpu
                group-hover:-translate-y-4 group-hover:-rotate-y-4">

                <div class="absolute inset-0 rounded-3xl bg-indigo-500/10 opacity-0 group-hover:opacity-100 transition"></div>

                <h3 class="relative text-3xl md:text-4xl font-extrabold text-indigo-300 mb-6">
                    Visión
                </h3>

                <p class="relative text-lg md:text-xl text-blue-100/80 leading-relaxed text-justify">
                    Ser una institución referente a nivel nacional e internacional en educación
                    continua, innovación académica y certificación profesional, reconocida por su
                    excelencia, confiabilidad y compromiso con el conocimiento.
                </p>

            </div>
        </div>

    </div>
</section>

<section class="font-baloo relative py-32 bg-gradient-to-b from-white to-blue-50">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-5xl font-extrabold text-blue-900 leading-tight">
            Tu formación define tu futuro
        </h2>

        <p class="mt-8 text-lg md:text-2xl text-slate-700 leading-relaxed">
            La educación transforma oportunidades en logros.
            Hoy es el momento de invertir en tu crecimiento académico y profesional
            con una institución que apuesta por la innovación y la calidad.
        </p>

    </div>
</section>




@endsection
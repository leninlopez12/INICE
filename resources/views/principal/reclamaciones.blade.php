@extends('layouts.page')

@section('title', 'Reclamaciones')

@push('css')
@endpush

@section('content')

<!-- HEADER -->
<header class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-950">
    <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_top,_#60a5fa_0%,_transparent_60%)]"></div>

    <div class="relative z-10 text-center px-6">
        <h1 class="font-baloo text-4xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight">
            Libro de Reclamaciones
        </h1>
        <p class="mt-4 text-lg sm:text-xl text-blue-200 max-w-2xl mx-auto">
            Instituto de Innovación e Impulso de la Ciencia Educativa – INICE Perú
        </p>
        <div class="mx-auto mt-6 h-1 w-24 rounded-full bg-gradient-to-r from-sky-400 to-indigo-400"></div>
    </div>
</header>

<!-- CONTENIDO -->
<section class="bg-gradient-to-b from-slate-50 to-white py-20 font-baloo">
    <div class="max-w-4xl mx-auto px-6">

        <!-- CONTENEDOR PRINCIPAL -->
        <div class="bg-white/80 backdrop-blur-xl border border-slate-200 rounded-3xl p-10 shadow-xl">

            <!-- TITULO -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-indigo-900">
                    Libro Virtual de Reclamaciones
                </h2>
                <p class="mt-4 text-slate-700 text-lg max-w-2xl mx-auto">
                    Conforme al Código de Protección y Defensa del Consumidor, INICE Perú pone a tu disposición este
                    Libro Virtual para registrar quejas o reclamos relacionados con nuestros servicios educativos.
                </p>
            </div>

            <!-- BLOQUE INFORMATIVO -->
            <div class="bg-gradient-to-br from-indigo-50 to-sky-50 border border-indigo-200 rounded-2xl p-6 mb-10">
                <p class="text-slate-800 text-lg leading-relaxed text-center">
                    Tu solicitud será atendida de manera transparente, responsable y dentro de los plazos
                    establecidos por la normativa vigente.
                </p>
            </div>

            <!-- IDENTIFICACIÓN -->
            <div class="bg-indigo-900 rounded-2xl p-5 text-white text-center font-semibold mb-8">
                Para iniciar tu registro, por favor identifícate
            </div>

            <!-- OPCIONES -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-slate-800 text-lg mb-10">

                <label class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-indigo-400 cursor-pointer transition">
                    <input type="radio" name="identificacion" class="accent-indigo-700">
                    Estudiante INICE
                </label>

                <label class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-indigo-400 cursor-pointer transition">
                    <input type="radio" name="identificacion" class="accent-indigo-700">
                    Docente
                </label>

                <label class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-indigo-400 cursor-pointer transition">
                    <input type="radio" name="identificacion" class="accent-indigo-700">
                    Usuario Externo
                </label>

                <label class="flex items-center gap-3 p-4 rounded-xl border border-slate-200 hover:border-indigo-400 cursor-pointer transition">
                    <input type="radio" name="identificacion" class="accent-indigo-700">
                    Público en General
                </label>

            </div>

            <!-- BOTÓN -->
            <div class="flex justify-center">
                <a href="mailto:reclamaciones@inice.edu.pe"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-indigo-700 to-blue-700 hover:from-indigo-600 hover:to-blue-600 text-white font-bold py-3 px-10 rounded-full transition transform hover:-translate-y-1">
                    Continuar Registro
                </a>
            </div>

        </div>
    </div>
</section>

@endsection

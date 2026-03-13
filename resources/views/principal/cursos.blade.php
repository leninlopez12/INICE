@extends('layouts.page')

@section('title', 'Cursos')

@push('css')

@endpush

@section('content')
<header class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-950">
    <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_top,_#60a5fa_0%,_transparent_60%)]"></div>

    <div class="relative z-10 text-center px-6">
        <h1 class="font-baloo text-4xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight">
            Nuestros <span class="text-sky-400">Cursos</span>
        </h1>
        <p class="mt-4 text-lg sm:text-xl text-blue-200 max-w-2xl mx-auto">
            Descubre nuestros cursos diseñados para potenciar tus habilidades y conocimientos en diversas áreas
        </p>
        <div class="mx-auto mt-6 h-1 w-24 rounded-full bg-gradient-to-r from-sky-400 to-indigo-400"></div>
    </div>
</header>

    

<section class="max-w-7xl mx-auto  ">
    <div class="bg-gradient-to-br from-white to-pink-200 shadow-2xl rounded-3xl p-8 w-full my-10 font-baloo justify-center">
    <div class="flex flex-col md:flex-row gap-6 items-center">

        <div class="md:w-1/3">
            <img src="{{ asset('img/cursos/nuevos/QUECHUA.webp') }}" alt="curso inice"
                 class="w-full h-auto rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        </div>


        <div class="md:w-2/3 text-gray-800">
            <h2 class="text-4xl font-extrabold text-cyan-800 drop-shadow-lg">Quechua Básico</h2>
            <p class="text-xl mt-2">Aprende Quechua desde sus fundamentos y fortalece tu conexión con una de las lenguas más importantes de los Andes</p>


            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6 text-cyan-900 font-baloo text-xl">

                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/calendary.png') }}" alt="Calendario" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Inicio: <span class="text-cyan-800">Marzo</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/clock.png') }}" alt="Reloj" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Duración: <span class="text-cyan-800">. Sesiones</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/computer.png') }}" alt="Zoom" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Modalidad: <span class="text-cyan-800">Online vía Meet</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/file2.png') }}" alt="Libro" class="w-10 h-10 object-contain">
                    <p class="font-semibold">00 horas académicas <br><span class="text-cyan-800"></span></p>
                </div>
            </div>



            <div class="mt-6 flex flex-col sm:flex-row gap-4">
                <a href="https://chat.whatsapp.com/G6QaWMj4fSeBdgDfj3DbRl" target="_blank"
                   class="bg-green-500 text-white font-bold py-2 px-6 rounded-full shadow-md hover:bg-green-600 transition flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i> Más Información
                </a>

                <button
                    class="border border-cyan-800 text-cyan-900 font-bold py-2 px-6 rounded-full shadow-md hover:bg-cyan-800 hover:text-white transition">
                    Con Certificación
                </button>
            </div>

            
        </div>
    </div>
</div>
<div class="bg-gradient-to-br from-white to-pink-200 shadow-2xl rounded-3xl p-8 w-full my-10 font-baloo justify-center">
    <div class="flex flex-col md:flex-row gap-6 items-center">

        <div class="md:w-1/3">
            <img src="{{ asset('img/cursos/nuevos/adminsistemas.webp') }}" alt="curso inice"
                 class="w-full h-auto rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        </div>


        <div class="md:w-2/3 text-gray-800">
            <h2 class="text-4xl font-extrabold text-cyan-800 drop-shadow-lg">Administración de Sistemas</h2>
            <p class="text-xl mt-2">Curso dirigido a estudiantes y profesionales que desean aprender</p>


            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6 text-cyan-900 font-baloo text-xl">

                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/calendary.png') }}" alt="Calendario" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Inicio: <span class="text-cyan-800">20 de Noviembre</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/clock.png') }}" alt="Reloj" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Duración: <span class="text-cyan-800">4 meses</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/computer.png') }}" alt="Zoom" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Modalidad: <span class="text-cyan-800">Online vía Meet</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/file2.png') }}" alt="Libro" class="w-10 h-10 object-contain">
                    <p class="font-semibold">1200 horas académicas <br><span class="text-cyan-800">(48 créditos)</span></p>
                </div>
            </div>



            <div class="mt-6 flex flex-col sm:flex-row gap-4">
                <a href="https://wa.me/51927963051" target="_blank"
                   class="bg-green-500 text-white font-bold py-2 px-6 rounded-full shadow-md hover:bg-green-600 transition flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i> Más Información
                </a>

                <button
                    class="border border-cyan-800 text-cyan-900 font-bold py-2 px-6 rounded-full shadow-md hover:bg-cyan-800 hover:text-white transition">
                    Con Certificación
                </button>
            </div>

            
        </div>
    </div>
</div>
<div class="bg-gradient-to-br from-white to-pink-200 shadow-2xl rounded-3xl p-8 w-full my-10 font-baloo justify-center">
    <div class="flex flex-col md:flex-row gap-6 items-center">

        <div class="md:w-1/3">
            <img src="{{ asset('img/cursos/nuevos/ofimaticaavanzada.webp') }}" alt="inice peru"
                 class="w-full h-auto rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        </div>


        <div class="md:w-2/3 text-gray-800">
            <h2 class="text-4xl font-extrabold text-cyan-800 drop-shadow-lg">Ofimática Avanzada</h2>
            <p class="text-xl mt-2">Curso dirigido a estudiantes y profesionales que desean aprender en ofimática Avanzada</p>


            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6 text-cyan-900 font-baloo text-xl">

                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/calendary.png') }}" alt="Calendario" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Inicio: <span class="text-cyan-800">01 de Diciembre</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/clock.png') }}" alt="Reloj" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Duración: <span class="text-cyan-800">1 mes</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/computer.png') }}" alt="Zoom" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Modalidad: <span class="text-cyan-800">Online vía Google Meet</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/file2.png') }}" alt="Libro" class="w-10 h-10 object-contain">
                    <p class="font-semibold">240 horas académicas <br><span class="text-cyan-800"></span></p>
                </div>
            </div>

            <div class="mt-6 flex flex-col sm:flex-row gap-4">
                <a href="https://wa.me/51927963051" target="_blank"
                   class="bg-green-500 text-white font-bold py-2 px-6 rounded-full shadow-md hover:bg-green-600 transition flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i> Más Información
                </a>

                <button
                    class="border border-cyan-800 text-cyan-900 font-bold py-2 px-6 rounded-full shadow-md hover:bg-cyan-800 hover:text-white transition">
                    Con Certificación
                </button>
            </div>

            
        </div>
    </div>
</div>

<div class="bg-gradient-to-br from-white to-pink-200 shadow-2xl rounded-3xl p-8 w-full my-10 font-baloo justify-center">
    <div class="flex flex-col md:flex-row gap-6 items-center">

        <div class="md:w-1/3">
            <img src="{{ asset('img/cursos/nuevos/cursomarketing.webp') }}" alt="inice cursos"
                 class="w-full h-auto rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
        </div>


        <div class="md:w-2/3 text-gray-800">
            <h2 class="text-4xl font-extrabold text-cyan-800 drop-shadow-lg">Marketing Digital</h2>
            <p class="text-xl mt-2">Curso dirigido a estudiantes y profesionales que desean aprender a trabajar con redes sociales, publicidad digital y estrategias de marketing online</p>


            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6 text-cyan-900 font-baloo text-xl">

                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/calendary.png') }}" alt="Calendario" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Inicio: <span class="text-cyan-800">15 de Diciembre</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/clock.png') }}" alt="Reloj" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Duración: <span class="text-cyan-800">1 mes</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/computer.png') }}" alt="Zoom" class="w-10 h-10 object-contain">
                    <p class="font-semibold">Modalidad: <span class="text-cyan-800">Online vía Google Meet</span></p>
                </div>


                <div class="flex items-center gap-4 bg-pink-50 p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('img/icon/file2.png') }}" alt="Libro" class="w-10 h-10 object-contain">
                    <p class="font-semibold">240 horas académicas <br><span class="text-cyan-800"></span></p>
                </div>
            </div>

            <div class="mt-6 flex flex-col sm:flex-row gap-4">
                <a href="https://wa.me/51927963051" target="_blank"
                   class="bg-green-500 text-white font-bold py-2 px-6 rounded-full shadow-md hover:bg-green-600 transition flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i> Más Información
                </a>

                <button
                    class="border border-cyan-800 text-cyan-900 font-bold py-2 px-6 rounded-full shadow-md hover:bg-cyan-800 hover:text-white transition">
                    Con Certificación
                </button>
            </div>

            
        </div>
    </div>
</div>
</section>

</section>
@push('js')

@endpush
@endsection

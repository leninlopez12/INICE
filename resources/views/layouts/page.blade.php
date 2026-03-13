<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '') }} - @yield('title')</title>
        <!-- Descripción para buscadores -->
        <!-- Meta Etiquetas para SEO -->
       <meta name="description" content="INICE PERU — Instituto de Innovación e Impulso de la Ciencia Educativa. Cursos de formación continua en diversas áreas para validar competencias y potenciar tu carrera.">
        <meta name="keywords" content="educación, cursos online, capacitaciones, certificaciones, formación profesional, ingeniería, INICE, INICE PERU, instituto INICE PERU, instituto INICE,Instituto de Innovación e Impulso de la Ciencia Educativa, cursos especializados, cursos gratuitos">
        <meta name="author" content="Instituto INICE - cursos de formación continua para fortalecer competencias en múltiples áreas educativas y profesionales.">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Open Graph Metadata (Para compartir en redes sociales como Facebook, LinkedIn) -->

        <meta property="og:title" content="Cursos de formación continua para fortalecer competencias en múltiples áreas educativas y profesionales.">
        <meta property="og:description" content="Descubre programas formativos diseñados para potenciar tu carrera. Aprende con los mejores expertos en ingeniería, ciencias sociales y más.">
        <meta property="og:image" content="{{ asset('img/logos/logoinice2.png') }}">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:type" content="website">

        <!-- Twitter Card Metadata (Optimización para Twitter) -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Cursos y capacitaciones para Avanzar en tu Carrera - INICE">
        <meta name="twitter:description" content="Potencia tu conocimiento con cursos y capacitaciones diseñados para el éxito profesional. Aprende con nosotros.">
        <meta name="twitter:image" content="{{ asset('img/logos/logoinice2.png') }}">

        <!-- Canonical URL (Evita contenido duplicado en Google) -->
        <link rel="canonical" href="{{ url('/') }}">
        <!-- Fonts -->
         <link rel="shortcut icon" href="{{asset('img/logos/logoinice2.png')}}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/ee0bd02b3d.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Swiper.js CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- tipo de letra -->
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap" rel="stylesheet">
        
        <!-- Swiper.js JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- alpine -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <!-- Fonts -->
        <link rel="shortcut icon" href="{{asset('img/logos/inicefavicon.png')}}" sizes="16x16" type="logo inice">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script src="https://kit.fontawesome.com/ee0bd02b3d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@framer-motion"></script>
        <script src="https://cdn.jsdelivr.net/npm/lucide-react"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @stack('css')
        <style>
            @keyframes heartbeat {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.08); }
}

.animate-heartbeat {
  animation: heartbeat 1.6s ease-in-out infinite;
}

        </style>
        
        <link rel="stylesheet" href="{{asset('css/footer/style.css')}}">
    </head>
    <body  class="m-0 p-0">
        
    @php use Illuminate\Support\Facades\Route; @endphp



<!-- NEW NAV -->
    <nav x-data="{ mobileOpen: false }" class="w-full absolute top-0 left-0 z-50 px-6 lg:py-4 py-2 flex items-center justify-between text-white bg-transparent">
        <div class="flex items-center lg:space-x-6 space-x-2 lg:ml-16 ml-0">
            <a href="{{ route('laude') }}"><img src="{{ asset('img/logos/logoinice.png') }}" alt="Logo INICE PERU" class="lg:h-8 h-6"></a>
            
            <div class="h-6 border-l border-white mx-2"></div>
            <div class="flex space-x-4">
                <a href="https://web.facebook.com/iniceperu" class="text-sky-300 hover:text-sky-600 lg:text-2xl text-lg"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/channel/UCeuVbGo1j1JSixeojSAF68w" class="text-red-500 hover:text-red-600 lg:text-2xl text-lg"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/institutoinice/" class="text-fuchsia-400 hover:text-fuchsia-600 lg:text-2xl text-lg"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- BOTÓN HAMBURGUESA (MOBILE) -->
    <button
        @click="mobileOpen = true"
        class="lg:hidden text-2xl hover:text-cyan-300 transition">
        <i class="fas fa-bars"></i>
    </button>

<!-- NAV DERECHO -->
<div class="hidden lg:flex items-center space-x-8 font-baloo">

    <!-- INSTITUCIÓN -->
    <div class="relative group">
        <button class="flex items-center gap-1 hover:text-cyan-300 transition">
            Institución
            <i class="fas fa-chevron-down text-xs"></i>
        </button>

        <div
            class="absolute top-full left-0 mt-3 w-64 bg-white/10 backdrop-blur-xl
                   border border-white/20 rounded-xl shadow-xl opacity-0 invisible
                   group-hover:opacity-100 group-hover:visible
                   translate-y-2 group-hover:translate-y-0
                   transition-all duration-300">

            <a href="{{ route('nosotros') }}" class="block px-5 py-3 hover:bg-white/10 transition">
                Quiénes Somos
            </a>
            <a href="{{ route('nosotros') }}" class="block px-5 py-3 hover:bg-white/10 transition">
                Misión y Visión
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Autoridades
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Alianzas Estratégicas
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Marco Institucional
            </a>
        </div>
    </div>

    <!-- OFERTA ACADÉMICA -->
    <div class="relative group">
        <button class="flex items-center gap-1 hover:text-cyan-300 transition">
            Oferta Académica
            <i class="fas fa-chevron-down text-xs"></i>
        </button>

        <div
            class="absolute top-full left-0 mt-3 w-64 bg-white/10 backdrop-blur-xl
                   border border-white/20 rounded-xl shadow-xl opacity-0 invisible
                   group-hover:opacity-100 group-hover:visible
                   translate-y-2 group-hover:translate-y-0
                   transition-all duration-300">

            <a href="{{ route('cursos') }}" class="block px-5 py-3 hover:bg-white/10 transition">
                Cursos
            </a>
            <a href="{{ route('laude') }}#capacitaciones" class="block px-5 py-3 hover:bg-white/10 transition">
                Programas de Capacitación
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Programas Especializados
            </a>
        </div>
    </div>

    <!-- CERTIFICACIÓN -->
    <div class="relative group">
        <button class="flex items-center gap-1 hover:text-cyan-300 transition">
            Certificación
            <i class="fas fa-chevron-down text-xs"></i>
        </button>

        <div
            class="absolute top-full left-0 mt-3 w-64 bg-white/10 backdrop-blur-xl
                   border border-white/20 rounded-xl shadow-xl opacity-0 invisible
                   group-hover:opacity-100 group-hover:visible
                   translate-y-2 group-hover:translate-y-0
                   transition-all duration-300">

            <a href="{{ route('pagina') }}" class="block px-5 py-3 hover:bg-white/10 transition">
                Validar Certificado
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Tipos de Certificación
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Certificación Digital
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Certificación Física
            </a>
        </div>
    </div>

    <!-- EVENTOS -->
    <div class="relative group">
        <button class="flex items-center gap-1 hover:text-cyan-300 transition">
            Eventos
            <i class="fas fa-chevron-down text-xs"></i>
        </button>

        <div
            class="absolute top-full left-0 mt-3 w-64 bg-white/10 backdrop-blur-xl
                   border border-white/20 rounded-xl shadow-xl opacity-0 invisible
                   group-hover:opacity-100 group-hover:visible
                   translate-y-2 group-hover:translate-y-0
                   transition-all duration-300">

            <a href="{{ route('laude') }}#eventos" class="block px-5 py-3 hover:bg-white/10 transition">
                Congresos
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Seminarios
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Webinars
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Eventos Académicos
            </a>
        </div>
    </div>

    <!-- COMUNIDAD -->
    <div class="relative group">
        <button class="flex items-center gap-1 hover:text-cyan-300 transition">
            Comunidad
            <i class="fas fa-chevron-down text-xs"></i>
        </button>

        <div
            class="absolute top-full left-0 mt-3 w-64 bg-white/10 backdrop-blur-xl
                   border border-white/20 rounded-xl shadow-xl opacity-0 invisible
                   group-hover:opacity-100 group-hover:visible
                   translate-y-2 group-hover:translate-y-0
                   transition-all duration-300">

            <a href="{{ route('laude') }}" class="block px-5 py-3 hover:bg-white/10 transition">
                Únete a INICE
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Docentes y Ponentes
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Comunidad Estudiantil
            </a>
            <a href="#" class="block px-5 py-3 hover:bg-white/10 transition">
                Convenios
            </a>
        </div>
    </div>

    <!-- ACCESO -->
    <!-- ACCESO / LOGIN -->
@if (Route::has('login'))
    @auth
        <a href="{{ url('/dashboard') }}"
           class="px-5 py-2 rounded-full border border-emerald-400 text-emerald-300
                  hover:bg-emerald-400 hover:text-black transition font-semibold">
            Panel de Control
        </a>
    @else
        <a href="{{ route('login') }}"
           class="px-5 py-2 rounded-full border border-cyan-400 text-cyan-300
                  hover:bg-cyan-400 hover:text-black transition font-semibold">
            Iniciar Sesión
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
               class="px-5 py-2 rounded-full border border-purple-400 text-purple-300
                      hover:bg-purple-400 hover:text-black transition font-semibold">
                Registrarse
            </a>
        @endif
    @endauth
@endif


</div>
  <!-- MENU MOBILE -->
<div x-show="mobileOpen"
     x-transition.opacity
     class="fixed inset-0 z-40 bg-gradient-to-br from-black/70 via-slate-900/70 to-black/70 backdrop-blur-md lg:hidden"
     @click="mobileOpen = false">

    <div x-show="mobileOpen"
         x-transition:enter="transition transform duration-500"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition transform duration-400"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="absolute top-0 right-0 w-[85%] max-w-sm h-full
                bg-white/10 backdrop-blur-2xl
                border-l border-white/20
                shadow-2xl shadow-cyan-500/10
                p-7 text-white"
         @click.stop>

        <!-- HEADER -->
        <div class="flex items-center justify-between mb-8">
            <h3 class="text-lg font-bold tracking-wide text-cyan-300">
                Instituto de Innovación e Impulso de la Ciencia Educativa
            </h3>
            <button @click="mobileOpen = false"
                    class="text-2xl hover:text-cyan-300 transition hover:rotate-90">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- NAV ITEMS -->
        <nav class="space-y-2 text-base font-medium">

            <a href="{{ route('nosotros') }}"
               class="group flex items-center justify-between px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">
                <span>Institución</span>
                <i class="fas fa-building text-cyan-300 opacity-70 group-hover:translate-x-1 transition"></i>
            </a>

            <a href="{{ route('cursos') }}"
               class="group flex items-center justify-between px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">
                <span>Oferta Académica</span>
                <i class="fas fa-book text-cyan-300 opacity-70 group-hover:translate-x-1 transition"></i>
            </a>

            <a href="{{ route('pagina') }}"
               class="group flex items-center justify-between px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">
                <span>Certificación</span>
                <i class="fas fa-certificate text-cyan-300 opacity-70 group-hover:translate-x-1 transition"></i>
            </a>

            <a href="{{ route('laude') }}#eventos"
               class="group flex items-center justify-between px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">
                <span>Eventos</span>
                <i class="fas fa-calendar-alt text-cyan-300 opacity-70 group-hover:translate-x-1 transition"></i>
            </a>

            <a href="{{ route('laude') }}"
               class="group flex items-center justify-between px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">
                <span>Comunidad</span>
                <i class="fas fa-users text-cyan-300 opacity-70 group-hover:translate-x-1 transition"></i>
            </a>

            <!-- DIVIDER -->
            <div class="my-6 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

            <!-- ACCESO -->
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="block text-center py-3 rounded-xl
                              border border-emerald-400/40
                              text-emerald-300 font-semibold
                              hover:bg-emerald-400 hover:text-black
                              transition">
                        Panel de Control
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="block text-center py-3 rounded-xl
                              border border-cyan-400/40
                              text-cyan-300 font-semibold
                              hover:bg-cyan-400 hover:text-black
                              transition">
                        Iniciar Sesión
                    </a>

                @endauth
            @endif

        </nav>
    </div>
</div>



</nav>
<!-- END NEW NAV -->


<!-- WHATSAPP FLOAT BUTTON -->
<div x-data="{ showTip: false }"
     x-init="
        setInterval(() => {
            showTip = true
            setTimeout(() => showTip = false, 1000)
        }, 8000)
     "
     class="fixed bottom-6 right-6 z-50 group">

    <a href="https://wa.me/51960094018?text=Hola%2C%20deseo%20informaci%C3%B3n%20sobre%20cursos%20o%20certificaciones%20en%20INICE"
       target="_blank"
       aria-label="WhatsApp INICE"
       class="relative block">

        <!-- Halo animado permanente -->
        <span class="absolute inset-0 rounded-full
                     bg-emerald-400/40 blur-xl
                     animate-ping"></span>

        <!-- Botón con latidos -->
        <div class="relative w-16 h-16 rounded-full
                    bg-gradient-to-br from-emerald-400 to-green-600
                    flex items-center justify-center
                    shadow-2xl shadow-emerald-500/40
                    animate-heartbeat
                    transform transition-all duration-300
                    hover:scale-110 hover:rotate-3
                    active:scale-95">

            <i class="fab fa-whatsapp text-white text-3xl"></i>
        </div>
    </a>

    <!-- TOOLTIP AUTOMÁTICO + HOVER -->
    <div x-show="showTip"
         x-transition.opacity.scale
         class="absolute right-20 bottom-1/2 translate-y-1/2
                pointer-events-none">

        <div class="bg-white/90 backdrop-blur-lg
                    text-gray-900 text-sm font-semibold
                    px-4 py-2 rounded-xl shadow-lg
                    border border-emerald-300/40
                    whitespace-nowrap">
            ¿Deseas un curso de formación continua?
        </div>
    </div>

    <!-- TOOLTIP HOVER -->
    <div class="absolute right-20 bottom-1/2 translate-y-1/2
                opacity-0 group-hover:opacity-100
                transition-all duration-300
                translate-x-2 group-hover:translate-x-0
                pointer-events-none">

        <div class="bg-white/90 backdrop-blur-lg
                    text-gray-900 text-sm font-semibold
                    px-4 py-2 rounded-xl shadow-lg
                    border border-emerald-300/40
                    whitespace-nowrap">
            Escríbenos por WhatsApp!!!
        </div>
    </div>

</div>
<!--END  FLOATING WHATSAPP BUTTON -->

                
        <main>
            @yield('content')
        </main>
<footer class="font-baloo relative py-20 bg-gradient-to-b from-indigo-950 to-blue-950 overflow-hidden">

  <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 right-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-24 left-20 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>

  </div>

    <!-- LÍNEA SUPERIOR TECNOLÓGICA -->
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-rose-300 to-transparent"></div>

    <!-- CONTENEDOR -->
    <div class="relative max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-14 z-10">

    <!-- IDENTIDAD -->
    <div class="space-y-6">
        <img src="{{ asset('img/logos/logoinice.png') }}"
             class="w-36 drop-shadow-[0_10px_35px_rgba(244,114,182,0.45)]"
             alt="INICE Perú">

        <p class="text-md text-slate-200 leading-relaxed ">
            Instituto de Innovación e Impulso de la Ciencia Educativa.
            Formación moderna, certificaciones verificables y educación del futuro.
        </p>

        <div class="flex gap-4 pt-2 text-2xl text-slate-200">
            <a href="https://web.facebook.com/iniceperu" class="text-blue-400 transition"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/institutoinice/" class="text-fuchsia-400 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-rose-400 transition"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.youtube.com/channel/UCeuVbGo1j1JSixeojSAF68w" class="text-red-600 transition"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <!-- INSTITUCIÓN -->
    <div>
        <h3 class="text-xl font-semibold text-rose-500 mb-5 tracking-wide">
            Institución
        </h3>
        <ul class="space-y-3 text-md text-slate-200">
            <li><a href="{{ route('laude') }}" class="hover:text-rose-500">Inicio</a></li>
            <li><a href="{{ route('nosotros') }}" class="hover:text-rose-500">Identidad Institucional</a></li>
            <li><a href="#" class="hover:text-rose-500">Nosotros</a></li>
            <li><a href="#" class="hover:text-rose-500">Convenios</a></li>
        </ul>
    </div>

    <!-- FORMACIÓN -->
    <div>
        <h3 class="text-xl font-semibold text-fuchsia-500 mb-5 tracking-wide">
            Formación Académica
        </h3>
        <ul class="space-y-3 text-md text-slate-200">
            <li><a href="{{ route('cursos') }}" class="hover:text-fuchsia-500">Cursos</a></li>
            <li><a href="#" class="hover:text-fuchsia-500">Certificaciones</a></li>
            <li><a href="#" class="hover:text-fuchsia-500">Programas</a></li>
            <li><a href="#" class="hover:text-fuchsia-500">Educación Continua</a></li>
            <li><a href="{{ route('pagina') }}" class="hover:text-fuchsia-500">Verificación de Certificados</a></li>
            <li><a href="#" class="hover:text-fuchsia-500">Aula Virtual</a></li>
        </ul>
    </div>

    <!-- CONTACTO INSTITUCIONAL -->
    <div>
        <h3 class="text-xl font-semibold text-rose-500 mb-5 tracking-wide">
            Contacto Institucional
        </h3>
        <ul class="space-y-4 text-md text-slate-200">
            <li class="flex items-start gap-3">
                <i class="fas fa-phone mt-1 text-rose-400"></i>
                <span>+51 960 094 018</span>
            </li>
            <li class="flex items-start gap-3">
                <i class="fas fa-envelope mt-1 text-fuchsia-400"></i>
                <span>atencion@inice.edu.pe</span>
            </li>
            <li class="flex items-start gap-3">
                <i class="fas fa-map-marker-alt mt-1 text-rose-400"></i>
                <span>
                    Av. Abancay Nº 130<br>
                    San Román, Puno – Perú
                </span>
            </li>
        </ul>
    </div>

</div>


    <!-- SEPARADOR -->
    <div class="relative max-w-7xl mx-auto mt-16 px-6">
        <div class="h-px bg-gradient-to-r from-transparent via-rose-400 to-transparent"></div>
    </div>

    <!-- PIE FINAL -->
    <div class="relative text-center mt-8 text-slate-300 text-sm">
        © 2025 Instituto de Innovación e Impulso de la Ciencia Educativa INICE PERÚ — Educación e Innovación
        <div class="mt-4 flex justify-center gap-6 text-[14px]">
            <a href="{{ route('privacidad') }}" class="hover:text-rose-400">Términos</a>
            <a href="{{ route('privacidad') }}" class="hover:text-fuchsia-400">Privacidad</a>
            <a href="{{ route('reclamaciones') }}" class="hover:text-rose-400">Reclamaciones</a>
        </div>
    </div>

</footer>







<div class="w-full py-1 bg-rose-500">
    
  </div>


        @livewireScripts
    </body>
</html>
<!-- Script para el botón de hamburguesa -->
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
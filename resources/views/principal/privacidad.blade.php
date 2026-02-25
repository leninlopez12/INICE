@extends('layouts.page')

@section('title', 'Privacidad')

@push('css')


</style>
@endpush   
@section('content')

<!-- HEADER -->
<header class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-950">
    <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_top,_#60a5fa_0%,_transparent_60%)]"></div>

    <div class="relative z-10 text-center px-6">
        <h1 class="font-baloo text-4xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight">
            Política de Privacidad
        </h1>
        <p class="mt-4 text-lg sm:text-xl text-blue-200 max-w-2xl mx-auto">
            Instituto de Innovación e Impulso de la Ciencia Educativa – INICE Perú
        </p>
        <div class="mx-auto mt-6 h-1 w-24 rounded-full bg-gradient-to-r from-sky-400 to-indigo-400"></div>
    </div>
</header>

<!-- CONTENIDO -->
<section class="bg-gradient-to-b from-slate-50 to-white py-20 font-baloo">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white/80 backdrop-blur-xl border border-slate-200 rounded-3xl p-10 shadow-xl space-y-14">

            <!-- INTRO -->
            <div>
                <h2 class="text-3xl font-bold text-indigo-900 mb-4">
                    Compromiso con tu información
                </h2>
                <p class="text-slate-700 text-lg leading-relaxed">
                    En el Instituto de Innovación e Impulso de la Ciencia Educativa INICE Perú, protegemos la información personal de nuestros estudiantes, usuarios y visitantes. Esta política se rige por la Ley N° 29733 – Ley de Protección de Datos Personales, garantizando confidencialidad, seguridad y uso responsable de los datos.
                </p>
            </div>

            <!-- DATOS -->
            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Información que recopilamos
                </h3>
                <ul class="space-y-3 text-slate-700 text-lg list-disc pl-6">
                    <li>Datos personales como nombres, correo electrónico, teléfono y documento de identidad</li>
                    <li>Información académica relacionada con cursos, programas y certificaciones</li>
                    <li>Datos de navegación y uso de la plataforma virtual</li>
                    <li>Información técnica del dispositivo, navegador e IP</li>
                </ul>
            </div>

            <!-- FINALIDAD -->
            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Finalidad del tratamiento
                </h3>
                <p class="text-slate-700 text-lg leading-relaxed">
                    Utilizamos la información para gestionar inscripciones, emitir certificados con validación QR, brindar acceso al aula virtual, mejorar nuestros servicios educativos, enviar comunicaciones institucionales y cumplir obligaciones legales.
                </p>
            </div>

            <!-- SEGURIDAD -->
            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Seguridad de la información
                </h3>
                <p class="text-slate-700 text-lg leading-relaxed">
                    INICE Perú aplica medidas técnicas, administrativas y organizativas que protegen los datos contra accesos no autorizados, pérdida o uso indebido, empleando protocolos de seguridad y control de acceso.
                </p>
            </div>

            <!-- COMPARTICIÓN -->
            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Compartición de datos
                </h3>
                <p class="text-slate-700 text-lg leading-relaxed mb-3">
                    No compartimos información personal con terceros, salvo:
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-700 text-lg">
                    <li>Por requerimiento legal de autoridades competentes</li>
                    <li>Con proveedores tecnológicos que apoyan nuestros servicios educativos</li>
                    <li>Con consentimiento previo y expreso del usuario</li>
                </ul>
            </div>

            <!-- DERECHOS -->
            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Derechos del titular de datos
                </h3>
                <ul class="list-disc pl-6 space-y-2 text-slate-700 text-lg">
                    <li>Acceder a sus datos personales</li>
                    <li>Solicitar rectificación o actualización</li>
                    <li>Cancelar o eliminar información cuando corresponda</li>
                    <li>Oponerse al tratamiento de datos</li>
                    <li>Revocar consentimiento otorgado</li>
                </ul>
            </div>

            <!-- TÉRMINOS -->
            <div class="pt-10 border-t border-slate-200">
                <h2 class="text-3xl font-bold text-indigo-900 mb-4 text-center">
                    Términos y Condiciones
                </h2>
                <p class="text-slate-700 text-lg leading-relaxed text-center max-w-3xl mx-auto">
                    El uso del sitio web de INICE Perú implica la aceptación de estos términos, los cuales se rigen por la legislación peruana vigente.
                </p>
            </div>

            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Uso de la plataforma
                </h3>
                <p class="text-slate-700 text-lg leading-relaxed">
                    El contenido del sitio tiene fines educativos e institucionales. Está prohibido su uso indebido, fraudulento o contrario a la ley. INICE Perú se reserva el derecho de actualizar o modificar el contenido sin previo aviso.
                </p>
            </div>

            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Propiedad intelectual
                </h3>
                <p class="text-slate-700 text-lg leading-relaxed">
                    Todos los contenidos, textos, materiales académicos y certificaciones son propiedad de INICE Perú, salvo indicación expresa.
                </p>
            </div>

            <div>
                <h3 class="text-2xl font-semibold text-indigo-900 mb-3">
                    Legislación aplicable
                </h3>
                <p class="text-slate-700 text-lg leading-relaxed">
                    Estas políticas se rigen por las leyes de la República del Perú. Cualquier controversia será resuelta ante las autoridades competentes.
                </p>
            </div>

            <!-- CIERRE -->
            <div class="pt-10 text-center">
                <p class="text-indigo-800 font-semibold text-lg">
                    INICE Perú – Educación, innovación y futuro
                </p>
            </div>

        </div>
    </div>
</section>






@endsection
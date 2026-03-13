@extends('layouts.page')

@section('title', 'Quechua Básico')

@push('css')
<style>
     .border-animado {
    position: relative;
    display: inline-block;
    padding-left: 1rem;
    padding-bottom: 0.25rem;
    font-weight: bold;
    font-size: 2.25rem;
    color: rgb(4, 54, 108);
    font-weight: 700
  }

  .border-animado::before,
  .border-animado::after {
    content: '';
    position: absolute;
    background-color: #128bbe;
    transition: all 0.5s ease;
  }

  .border-animado::before {
    width: 4px;
    height: 0;
    left: 0;
    top: 0;
  }

  .border-animado::after {
    height: 4px;
    width: 0;
    left: 0;
    bottom: 0;
  }

  .animar::before {
    animation: drawLeft 0.8s forwards;
  }

  .animar::after {
    animation: drawBottom 0.8s 0.8s forwards;
  }

  @keyframes drawLeft {
    from { height: 0; }
    to { height: 100%; }
  }

  @keyframes drawBottom {
    from { width: 0; }
    to { width: 100%; }
  }
.swiper {
  height: auto !important;
}
</style>
@endpush


@section('content')


<section class="relative w-full py-32 overflow-hidden
bg-gradient-to-br from-blue-950 via-indigo-900 to-blue-900 text-white">

<!-- AURORAS DE COLOR -->
<div class="absolute -top-40 -left-40 w-[36rem] h-[36rem] bg-cyan-400/30 rounded-full blur-[160px]"></div>
<div class="absolute -bottom-40 -right-40 w-[36rem] h-[36rem] bg-fuchsia-400/20 rounded-full blur-[160px]"></div>
<div class="absolute top-1/2 left-1/2 w-[40rem] h-[40rem] bg-indigo-500/20 rounded-full blur-[180px] -translate-x-1/2 -translate-y-1/2"></div>
<div class="relative max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-20 items-center">

<!-- CONTENIDO IZQUIERDA -->
<div>

<!-- BADGE -->
<div class="inline-flex items-center gap-2 px-4 py-2 rounded-full
bg-white/10 backdrop-blur-md border border-white/20
text-cyan-300 text-sm mb-6">

<i class="fas fa-graduation-cap"></i>
Curso de Capacitación

</div>

<!-- TITULO -->
<h1 class="text-4xl lg:text-7xl font-bold leading-tight mb-10">

Curso <br>
<span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">
Quechua Básico
</span>
</h1>

<!-- BOTON -->
<a id="btnCurso" href="https://chat.whatsapp.com/G6QaWMj4fSeBdgDfj3DbRl"
class="backdrop-blur-md group relative inline-flex items-center gap-4
px-9 py-4 rounded-full
bg-gradient-to-r from-emerald-400 via-green-500 to-emerald-500
text-white font-semibold
shadow-xl shadow-emerald-500/40
hover:shadow-emerald-400/60
hover:scale-105
transition duration-300

fixed bottom-6 left-1/2 -translate-x-1/2 z-2
md:static md:translate-x-0">

<!-- GLOW -->
<span class="absolute inset-0 rounded-2xl blur-xl opacity-40
bg-gradient-to-r from-emerald-400 to-green-500
group-hover:opacity-70 transition"></span>

<!-- ICONO -->
<i class="fab fa-whatsapp relative text-4xl"></i>

<!-- TEXTO -->
<span class="relative flex flex-col leading-tight">

<span class="text-sm opacity-90">
WhatsApp
</span>

<span class="text-lg font-bold">
Unirme al curso
</span>

</span>

</a>




</div>
<!-- TARJETA INFO PREMIUM -->
<div class="relative p-12 rounded-3xl
bg-white/10 backdrop-blur-xl
border border-white/20 shadow-2xl overflow-hidden">

<!-- FRANJA LICLLA REALISTA -->
<div class="absolute top-0 left-0 w-full h-2 opacity-90
bg-[repeating-linear-gradient(45deg,#c1121f_0,#c1121f_6px,#f72585_6px,#f72585_12px,#ffbe0b_12px,#ffbe0b_18px,#2a9d8f_18px,#2a9d8f_24px,#4361ee_24px,#4361ee_30px)]">
</div>

<!-- ROMBOS PEQUEÑOS TIPO TELAR -->
<div class="absolute top-0 left-0 w-full h-2 opacity-40
bg-[radial-gradient(circle,white_1px,transparent_1px)] bg-[length:10px_10px]">
</div>

<p class="text-2xl font-semibold leading-relaxed text-white text-center md:text-left">

Aprende Quechua desde sus fundamentos y fortalece tu conexión con una de las lenguas más importantes de las lenguas más importantes de los Andes.

</p>

<p class="mt-6 text-cyan-300 font-medium text-center md:text-left">
Formación académica con certificación institucional
</p>

</div>




</div>

</div>

</section>







<section class="font-baloo relative w-full py-28 overflow-hidden bg-white text-blue-950">

<!-- luces de fondo suaves -->
<div class="absolute -top-40 -left-40 w-[35rem] h-[35rem] bg-blue-300/30 blur-[160px] rounded-full"></div>
<div class="absolute -bottom-40 -right-40 w-[35rem] h-[35rem] bg-indigo-300/30 blur-[160px] rounded-full"></div>

<div class="relative max-w-4xl mx-auto px-6 text-center">

<!-- titulo -->
<h2 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
Sobre el Curso
</h2>

<!-- linea decorativa moderna -->
<div class="mx-auto mb-10 w-24 h-[4px] bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-full"></div>

<!-- descripcion -->
<p class="text-blue-900 text-2xl md:text-3xl leading-relaxed mb-6 font-bold">
Aprende quechua básico y descubre la riqueza cultural andina. Curso dirigido a estudiantes, docentes y público general interesados en fortalecer conocimientos y acercarse a nuestras raíces culturales <br> <br>¡...Hamuy yachayman...!
</p>

</div>


<div class="bg-white  font-baloo mt-20 mb-20 ">

<div class=" py-12 px-4 md:px-10 max-w-6xl mx-auto">
  
          <h2 class="text-center text-4xl md:text-6xl font-bold mb-6 tracking-tight text-blue-950">
            Descubre la experiencia con <span class="text-rose-500">INICE Perú</span>
          </h2>
          <div class="mx-auto mb-10 w-24 h-[4px] bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-full"></div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      <!-- Card -->
      <div class="group bg-gradient-to-tr from-cyan-100 via-sky-200 to-teal-200 rounded-2xl border border-cyan-700 p-6 text-center transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="mb-6 relative w-fit mx-auto">
          <!-- Imagen flotante -->
          <img src="{{ asset('img/icon/videocam.png') }}"
              alt="Clases en vivo"
              class="w-24 h-24 mx-auto transition-transform duration-300 group-hover:scale-110 object-contain relative z-10">

          <!-- Sombra reflejo debajo -->
          <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-black/10 rounded-full blur-sm z-0"></div>
        </div>

        <h3 class="text-[#00145d] font-extrabold text-xl uppercase">Clases en vivo</h3>
        <p class="text-[#00145d] italic text-md mt-2">Que son grabadas</p>
      </div>

  <div class="group bg-gradient-to-tr from-cyan-100 via-sky-200 to-teal-200 rounded-2xl border border-cyan-700 p-6 text-center transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
    <div class="mb-6 relative w-fit mx-auto">
          <!-- Imagen flotante -->
          <img src="{{ asset('img/icon/image.png') }}"
              alt="Clases en vivo"
              class="w-24 h-24 mx-auto transition-transform duration-300 group-hover:scale-110 object-contain relative z-10">

          <!-- Sombra reflejo debajo -->
          <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-black/10 rounded-full blur-sm z-0"></div>
        </div>
    <h3 class="text-[#00145d] font-extrabold text-xl uppercase">Docentes expertos</h3>
    <p class="text-[#00145d] italic text-md mt-2">En el área</p>
  </div>

  <div class="group bg-gradient-to-tr from-cyan-100 via-sky-200 to-teal-200 rounded-2xl border border-cyan-700 p-6 text-center transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
    <div class="mb-6 relative w-fit mx-auto">
          <!-- Imagen flotante -->
          <img src="{{ asset('img/icon/computer.png') }}"
              alt="Clases en vivo"
              class="w-24 h-24 mx-auto transition-transform duration-300 group-hover:scale-110 object-contain relative z-10">

          <!-- Sombra reflejo debajo -->
          <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-black/10 rounded-full blur-sm z-0"></div>
        </div>
    <h3 class="text-[#00145d] font-extrabold text-xl uppercase">Aula virtual</h3>
    <p class="text-[#00145d] italic text-md mt-2">Dedicado</p>
  </div>

  <div class="group bg-gradient-to-tr from-cyan-100 via-sky-200 to-teal-200 rounded-2xl border border-cyan-700 p-6 text-center transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
    <div class="mb-6 relative w-fit mx-auto">
          <!-- Imagen flotante -->
          <img src="{{ asset('img/icon/notebook.png') }}"
              alt="Clases en vivo"
              class="w-24 h-24 mx-auto transition-transform duration-300 group-hover:scale-110 object-contain relative z-10">

          <!-- Sombra reflejo debajo -->
          <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-black/10 rounded-full blur-sm z-0"></div>
        </div>
    <h3 class="text-[#00145d] font-extrabold text-xl uppercase">Materiales</h3>
    <p class="text-[#00145d] italic text-md mt-2">Descargables y actualizados</p>
  </div>

  <div class="group bg-gradient-to-tr from-cyan-100 via-sky-200 to-teal-200 rounded-2xl border border-cyan-700 p-6 text-center transform transition duration-300 hover:-translate-y-2 hover:shadow-xl">
    <div class="mb-6 relative w-fit mx-auto">
          <!-- Imagen flotante -->
          <img src="{{ asset('img/icon/mobile.png') }}"
              alt="Clases en vivo"
              class="w-24 h-24 mx-auto transition-transform duration-300 group-hover:scale-110 object-contain relative z-10">

          <!-- Sombra reflejo debajo -->
          <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-4 bg-black/10 rounded-full blur-sm z-0"></div>
        </div>
    <h3 class="text-[#00145d] font-extrabold text-xl uppercase">Soporte académico</h3>
    <p class="text-[#00145d] italic text-md mt-2">Personalizado</p>
  </div>
</div>



</div>
</div>
</section>






<section class="relative w-full py-32 overflow-hidden bg-gradient-to-b from-blue-950 via-indigo-950 to-slate-950 text-white">

<!-- EFECTOS DE FONDO -->
<div class="absolute -top-40 -left-40 w-[40rem] h-[40rem] bg-cyan-400/20 blur-[180px] rounded-full"></div>
<div class="absolute -bottom-40 -right-40 w-[40rem] h-[40rem] bg-indigo-400/20 blur-[180px] rounded-full"></div>
<div class="relative max-w-7xl mx-auto px-6 space-y-40">
<!-- ========================= -->
<!-- RUTA DE APRENDIZAJE -->
<!-- ========================= -->

<div>

<div class="font-baloo text-center mb-20">

<h2 class="text-4xl lg:text-6xl font-bold mb-6">
Ruta de aprendizaje
</h2>
<div class="mx-auto mb-10 w-24 h-[4px] bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-full"></div>
<p class="text-cyan-300 text-2xl">
Un recorrido estructurado para comprender y aplicar los contenidos del programa
</p>

</div>


<div class="relative">

<!-- linea -->
<div class="hidden lg:block absolute top-1/2 left-0 w-full h-[2px] bg-gradient-to-r from-cyan-400 to-indigo-400"></div>

<div class="grid lg:grid-cols-5 gap-10">

<div class="text-center group">

<div class="mx-auto mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-cyan-400 to-blue-500 shadow-xl text-xl font-bold">
1
</div>

<h3 class="font-semibold mb-2">Introducción</h3>
<p class="text-sm text-gray-300">Presentación del programa y conceptos iniciales</p>

</div>


<div class="text-center group">

<div class="mx-auto mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 shadow-xl text-xl font-bold">
2
</div>

<h3 class="font-semibold mb-2">Desarrollo</h3>
<p class="text-sm text-gray-300">Estudio de los contenidos principales del curso</p>

</div>


<div class="text-center group">

<div class="mx-auto mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-emerald-400 to-green-500 shadow-xl text-xl font-bold">
3
</div>

<h3 class="font-semibold mb-2">Aplicación</h3>
<p class="text-sm text-gray-300">Actividades orientadas a reforzar el aprendizaje</p>

</div>


<div class="text-center group">

<div class="mx-auto mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-pink-400 to-rose-500 shadow-xl text-xl font-bold">
4
</div>

<h3 class="font-semibold mb-2">Consolidación</h3>
<p class="text-sm text-gray-300">Síntesis de los conocimientos adquiridos</p>

</div>


<div class="text-center group">

<div class="mx-auto mb-6 w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 shadow-xl text-xl font-bold">
5
</div>

<h3 class="font-semibold mb-2">Finalización</h3>
<p class="text-sm text-gray-300">Cierre del proceso formativo</p>

</div>

</div>

</div>

</div>



<!-- ========================= -->
<!-- PROCESO DE CERTIFICACION -->
<!-- ========================= -->

<div class="font-baloo grid lg:grid-cols-2 gap-20 items-center">

<div class="">

<h2 class="text-5xl lg:text-6xl font-bold mb-8">
Proceso de <span class="text-blue-400">certificación</span>
</h2>
<div class=" mb-10 w-24 h-[4px] bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-full"></div>
<p class="text-gray-300 mb-10">
La certificación se otorga una vez culminado el proceso formativo y verificado el cumplimiento de los requisitos establecidos para el programa.
</p>


<div class="space-y-6">

<div class="space-y-6">

<div class="flex gap-5 items-start">

<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-cyan-400 text-black font-bold">
1
</div>

<p class="text-gray-300 leading-relaxed">Inscripción al programa.</p>

</div>


<div class="flex gap-5 items-start">

<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-indigo-400 text-black font-bold">
2
</div>

<p class="text-gray-300 leading-relaxed">Participación en el desarrollo académico del curso.</p>

</div>


<div class="flex gap-5 items-start">

<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-emerald-400 text-black font-bold">
3
</div>

<p class="text-gray-300 leading-relaxed">Cumplimiento de las actividades o evaluaciones correspondientes.</p>

</div>


<div class="flex gap-5 items-start">

<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-rose-400 text-black font-bold">
4
</div>

<p class="text-gray-300 leading-relaxed">Finalización del programa académico.</p>

</div>


<div class="flex gap-5 items-start">

<div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-xl bg-yellow-400 text-black font-bold">
5
</div>

<p class="text-gray-300 leading-relaxed">Emisión del certificado institucional correspondiente.</p>

</div>

</div>

</div>

</div>


<div class="relative flex items-center justify-center h-full">

<img 
src="{{ asset('img/certificadocourse.png') }}"
class="w-full max-w-xl h-auto object-contain 
transition duration-700 ease-out 
hover:scale-105 animate-float"
/>

</div>

</div>



<!-- ========================= -->
<!-- VALOR ACADEMICO -->
<!-- ========================= -->

<div class="font-baloo text-center max-w-5xl mx-auto ">

<h2 class="text-4xl lg:text-6xl font-bold mb-8">
Valor académico del <span class="text-sky-400">certificado</span>
</h2>
<div class="mx-auto mb-10 w-24 h-[4px] bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-full"></div>
<p class="text-gray-300 text-lg leading-relaxed mb-14">
La certificación institucional acredita el desarrollo del proceso formativo y representa un respaldo académico que evidencia la participación y aprobación del programa correspondiente.
</p>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12 items-center">


<!-- ITEM 1 -->
<div class="group relative flex items-center justify-center p-10 rounded-3xl 
bg-white/5 backdrop-blur-xl border border-white/10 
hover:border-cyan-400/40 transition duration-500 
hover:scale-[1.04] hover:-translate-y-1">

<img 
src="{{ asset('img/logos/cad.png') }}"
class="max-h-24 sm:max-h-28 lg:max-h-32 w-auto object-contain transition duration-500 group-hover:scale-110"
>

</div>



<!-- ITEM 2 -->
<div class="group relative flex flex-col items-center justify-center text-center p-10 rounded-3xl 
bg-white/5 backdrop-blur-xl border border-white/10 
hover:border-cyan-400/40 transition duration-500 
hover:scale-[1.04] hover:-translate-y-1">

<img 
src="{{ asset('img/logos/cpdp.png') }}"
class="max-h-24 sm:max-h-28 lg:max-h-32 w-auto object-contain mb-6 transition duration-500 group-hover:scale-110"
>


</div>



<!-- ITEM 3 -->
<div class="group relative flex flex-col items-center justify-center text-center p-10 rounded-3xl 
bg-white/5 backdrop-blur-xl border border-white/10 
hover:border-cyan-400/40 transition duration-500 
hover:scale-[1.04] hover:-translate-y-1">

<img 
src="{{ asset('img/logos/sap.png') }}"
class="max-h-24 sm:max-h-28 lg:max-h-32 w-auto object-contain mb-6 transition duration-500 group-hover:scale-110"
>


</div>


</div>





</div>
<!-- ========================= -->
<!-- CTA FINAL -->
<!-- ========================= -->

<div class="font-baloo relative text-center p-10 md:p-20 rounded-3xl bg-gradient-to-r from-emerald-400 to-green-500 text-black shadow-2xl">

<h2 class="text-4xl md:text-5xl font-bold mb-6">
Reserva tu participación
</h2>

<p class="mb-10 text-lg">
Accede al grupo informativo del programa y conoce todos los detalles del proceso de inscripción.
</p>

<a href="{{ route('laude') }}#btnCurso"
class="inline-flex items-center gap-4 px-10 py-5 rounded-full bg-black text-white font-semibold shadow-xl hover:scale-105 transition">

<i class="fab fa-whatsapp text-4xl"></i>

Unirme al grupo informativo

</a>

</div>

</section>

















<a id="btnCursoFloating"
href="https://chat.whatsapp.com/G6QaWMj4fSeBdgDfj3DbRl"

class="hidden fixed bottom-5 left-1/2 -translate-x-1/2 z-50
w-[92%] max-w-md
flex items-center justify-center gap-4

px-6 py-4
rounded-full

bg-gradient-to-r from-emerald-400 via-green-500 to-emerald-500
text-white font-semibold text-lg

shadow-[0_10px_40px_rgba(16,185,129,0.6)]
backdrop-blur-md

transition-all duration-300
active:scale-95
hover:scale-[1.02]">

<!-- ICONO -->
<div class="flex items-center justify-center
w-11 h-11 rounded-xl
 backdrop-blur-md">

<i class="fab fa-whatsapp text-4xl"></i>

</div>

<!-- TEXTO -->
<span class="flex flex-col leading-tight text-left">



<span class="font-bold text-lg">
Unirme al curso
</span>

</span>

</a>

@push('js')

@endpush



<script>

const boton = document.getElementById("btnCurso");
const botonFloat = document.getElementById("btnCursoFloating");

const observerBoton = new IntersectionObserver(
(entries) => {

entries.forEach(entry => {

if (entry.isIntersecting) {

botonFloat.style.display = "none";

} else {

if (window.innerWidth < 768) {
botonFloat.style.display = "flex";
}

}

});

},
{
threshold: 0
}
);

observerBoton.observe(boton);

</script>
<script>

const observerAnimacion = new IntersectionObserver((entries) => {

entries.forEach(entry => {

const el = entry.target;

if (entry.isIntersecting) {

el.classList.add('animar');

} else {

el.classList.remove('animar');

}

});

}, { threshold: 0.5 });

document.querySelectorAll('.titulo-animado').forEach(el => {

observerAnimacion.observe(el);

});

</script>


@endsection

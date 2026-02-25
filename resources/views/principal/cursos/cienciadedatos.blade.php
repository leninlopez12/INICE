@extends('layouts.page')

@section('title', 'Ciencia de datos')

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

<div class="font-baloo relative w-full overflow-hidden" style="background-image: url('{{ asset('img/fondo2.webp') }}'); background-size: cover; background-attachment: fixed; background-position: center;">
  <!-- Capa oscura -->
  <div class="absolute inset-0 bg-black/40 z-0"></div>

  <!-- Contenido -->
  <div class="relative z-10 mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-10 flex flex-col lg:flex-row gap-10 items-center">
    
    <!-- Imagen lateral -->
    <div class="w-full lg:w-3/5 flex justify-center">
      <img src="{{ asset('img/cursos/upeu/ciencia-de-datos-2.webp') }}" alt="Icurso ciencia de datos" class="rounded-lg shadow-lg max-h-[500px] w-full object-contain">
    </div>

    <!-- Formulario con sticky -->
    <div class="w-full lg:w-2/5">
      <div class="lg:sticky lg:top-20 p-4 sm:p-6 md:p-8">
        <div class="relative p-6 rounded-xl shadow-lg backdrop-blur-md bg-white/20 overflow-hidden">
            <div class="absolute -top-10 -left-10 w-40 h-40 bg-purple-500 opacity-30 rounded-full blur-2xl"></div>

            <!-- Capa de difuminado celeste (inferior derecha) -->
            <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-cyan-400 opacity-30 rounded-full blur-2xl"></div>

          <div class="bg-customazu text-center text-sky-500 text-2xl font-bold py-3 rounded-2xl mb-4">¡Inscríbete aquí!</div>
          <form id="formulario" class="space-y-2" onsubmit="enviarWhatsApp(event)">
            <input type="text" id="nombres" placeholder="Nombres*" class="w-full p-2 bg-white border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            <input type="text" id="apellidos" placeholder="Apellidos*" class="w-full p-2 bg-white border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            <input type="email" id="correo" placeholder="Correo Electrónico*" class="w-full p-2 bg-white border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            <input type="tel" id="celular" placeholder="Celular*" class="w-full p-2 bg-white border border-gray-300 rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-500">

            <div class="flex items-start gap-2">
              <input type="checkbox" id="acepto1" class="mt-1 accent-blue-700">
              <label for="acepto1" class="text-sm text-black">He leído y acepto las
                <a href="#" class="font-bold underline text-white">Políticas de Privacidad</a></label>
            </div>

            <div class="flex items-start gap-2">
              <input type="checkbox" id="acepto2" class="mt-1 accent-blue-700">
              <label for="acepto2" class="text-sm text-black">Autorizo el envío de publicidad según las
                <a href="#" class="font-bold underline text-white">Políticas de Privacidad</a></label>
            </div>

            <button type="submit" class="w-full text-lg mt-4 bg-sky-600 text-white font-semibold py-3 rounded-xl hover:bg-blue-800 transition">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="font-baloo bg-white mt-10 ">
  <div class="p-6 rounded-lg max-w-6xl mx-auto">
        <h2 class="mb-4">
        <span  class="titulo-animado border-animado text-5xl text-purple-900 font-extrabold px-6 py-4" > ¿Por qué este Curso es para Tí?</span>
        </h2>
      <p class="bg-white text-lg text-gray-700 text-base leading-relaxed p-5 rounded-lg shadow-sm border border-pink-100 hover:border-pink-300 transition-colors duration-300 mb-16">
        - El curso brinda una visión integral del ciclo completo de ciencia de datos, desde la idea inicial hasta su implementación final. <br>
        - Introduce los conceptos esenciales y la metodología CRISP-DM como base estructurada para los proyectos. <br>
        - Enseña cómo explorar, limpiar y preparar datos útiles para construir modelos de aprendizaje automático eficaces. <br>
        - Uso práctico de modelos supervisados y no supervisados para resolver casos reales con data.
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
        <div class="flex items-center bg-white border-l-4 border-purple-500 shadow-md p-4 rounded-md">
          <div class="w-14 h-14 flex items-center justify-center mr-4 overflow-hidden">
            <img src="{{ asset('img/icon/buld.png') }}" alt="Modalidad" class="w-12 h-12 object-contain">
          </div>
          <div>
            <p class="text-3xl text-gray-500 font-bold">Modalidad</p>
            <p class="text-2xl font-semibold text-purple-800">Online / Síncrona</p>
          </div>
        </div>
        <div class="flex items-center bg-white border-l-4 border-blue-500 shadow-md p-4 rounded-md">
          <div class="w-14 h-14 flex items-center justify-center  mr-4 overflow-hidden">
            <img src="{{ asset('img/icon/clock.png') }}" alt="Modalidad" class="w-12 h-12 object-contain">
          </div>
          <div>
            <p class="text-3xl text-gray-500 font-bold">Duración total</p>
            <p class="text-2xl font-semibold text-blue-800">1 mes / 64 horas académicas</p>
          </div>
        </div>
      </div>
  </div>
</div>


<div class="bg-gradient-to-tr from-cyan-100 via-sky-200 to-teal-200 w-full py-16">
  <div class="font-baloo  max-w-4xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 text-white mb-10 p-2">
    <div class="bg-gradient-to-br from-blue-900 to-blue-400 p-6 rounded-xl shadow-lg text-center transform transition-all duration-500 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-2xl">
      <div class="flex justify-center mb-2">
        <img src="{{ asset('img/icon/calendar2.png') }}" alt="Inicio" class="w-20 h-20 object-contain">
      </div>
      <h3 class="text-lg font-semibold mb-1 text-white">Inicio</h3>
      <p class="text-xl font-bold text-white">9 de junio</p>
    </div>


    <div class="bg-gradient-to-br from-sky-900 to-sky-400 p-6 rounded-xl shadow-lg text-center transform transition-all duration-500 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-2xl">
      <div class="flex justify-center mb-2">
        <img src="{{ asset('img/icon/calendar.png') }}" alt="Inicio" class="w-20 h-20 object-contain">
      </div>
      <h3 class="text-lg font-semibold mb-1">Días de Clase</h3>
      <p class="text-xl font-bold">Lunes y Miércoles</p>
    </div>

    <div class="bg-gradient-to-br from-cyan-900 to-cyan-400 p-6 rounded-xl shadow-lg text-center transform transition-all duration-500 ease-in-out hover:-translate-y-2 hover:scale-105 hover:shadow-2xl">
      <div class="flex justify-center mb-2">
        <img src="{{ asset('img/icon/clock2.png') }}" alt="Inicio" class="w-20 h-20 object-contain">
      </div>
      <h3 class="text-lg font-semibold mb-1">Horario</h3>
      <p class="text-xl font-bold">19:30 pm a 21:30 pm <br>(hora Peruana)</p>
    </div>
  </div>
</div>



<div class="bg-white  font-baloo mt-20 mb-20">
<div class=" py-12 px-4 md:px-10 max-w-6xl mx-auto">
          <h2 class="mb-10">
            <span  class="titulo-animado border-animado text-3xl text-white font-extrabold px-6 py-4" >Descubre la experiencia con Laude</span>
          </h2>
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



<div class="bg-cyan-700 py-16 px-4 md:px-20 rounded-t-3xl ">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-12">
    
    <!-- Título -->
  <div class=" font-baloo md:w-1/3 mx-auto text-center md:mx-0 md:text-left">
      <h2 class="text-white text-4xl md:text-5xl font-extrabold leading-tight">
        Contenido del <br>
        Curso
      </h2>
  </div>


    <!-- Detalles -->
    <div class="font-baloo md:w-2/3 w-full space-y-6">

<div x-data="{ open: 1 }" class="space-y-4 max-w-5xl mx-auto">

  <!-- Sección 1 -->
  <div>
    <button @click="open = 1" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      I. Data Science y CRISP-DM.
    </button>
    <div x-show="open === 1" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            ¿Qué es Data Science? 
            <span class="text-cyan-200">Aplicaciones prácticas.</span>
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Etapas de CRISP-DM
            <span class="text-cyan-200 block text-sm mt-1">explicadas con ejemplos.</span>
          </span>
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            -Flujo de trabajo de un proyecto en Python.
            
          </span>
        </li>
      </ul>


    </div>
  </div>

  <!-- Sección 2 -->
  <div>
    <button @click="open = 2" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      II. Exploración de Datos.
    </button>
    <div x-show="open === 2" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            Lectura de datos con pandas.
            
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Estadísticas descriptivas básicas en Python.
            
          </span>
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            Visualización de datos con matplotlib y seaborn
            
          </span>
        </li>
      </ul>
    </div>
  </div>

  <!-- Sección 3 -->
  <div>
    <button @click="open = 3" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      III. Preparación de Datos.
    </button>
    <div x-show="open === 3" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            Limpieza de datos con pandas (nulos, duplicados).
            
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Transformaciones: normalización y codificación.
            
          </span>
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            División de datos
            
          </span>
        </li>
      </ul>
    </div>
  </div>

  <!-- Sección 4 -->
  <div>
    <button @click="open = 4" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      IV. Modelos de Aprendizaje Supervisado Regresores.
    </button>
    <div x-show="open === 4" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            Regresión lineal.
            
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Evaluación con MSE, MAE.
            
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            Evaluación con MSE, MAE.
            
        </li>
      </ul>
    </div>
  </div>
    <!-- Sección 5 -->
  <div>
    <button @click="open = 5" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      V. Modelos de Aprendizaje Supervisado Clasificadores.
    </button>
    <div x-show="open === 5" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            Regresión logística y árbol de decisión.
            
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Evaluación: matriz de confusión, precisión, recall.
            
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            Visualización de la frontera de decisión.
            
        </li>
      </ul>
    </div>
  </div>
    <!-- Sección 6 -->
  <div>
    <button @click="open = 6" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      VI. Modelos de Aprendizaje No Supervisado Clustering y Reglas de Asociación.
    </button>
    <div x-show="open === 6" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            K-means en scikit-learn.
            
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Visualización de clústeres.
            
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            Evaluación con Silhouette Score.
            
        </li>
      </ul>
    </div>
  </div>
    <!-- Sección 7 -->
  <div>
    <button @click="open = 7" class="w-full bg-white text-cyan-900 font-bold text-lg py-4 px-6 rounded-full text-left">
      VII. Despliegue - Streamlit.
    </button>
    <div x-show="open === 7" x-collapse class="text-sm text-white mt-4 px-6">
      <ul class="space-y-4">
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">1</div>
          <span class="text-white leading-snug">
            Análisis de canastas de mercado.
            
          </span>
        </li>
        <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">2</div>
          <span class="text-white leading-snug">
            Reglas de asociación con mlxtend.
            
        </li>
                <li class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-6 h-6 bg-white text-cyan-700 flex items-center justify-center rounded-full text-sm font-bold">3</div>
          <span class="text-white leading-snug">
            Soporte, confianza y lift en Python
            
        </li>
      </ul>
    </div>
  </div>

</div>
    </div>
  </div>
</div>

<div class="max-w-6xl mx-auto px-4 py-12 font-baloo">
      <h2 class="mb-8 mt-10">
        <span  class="titulo-animado border-animado text-3xl text-purple-900 font-extrabold px-6 py-4" > Inversión del Curso</span>
      </h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Soles -->
    <div class="relative group bg-white p-6 rounded-3xl shadow-xl border border-purple-400 hover:border-purple-400 hover:bg-purple-50 hover:scale-105 transition-all duration-300">
      <div class="absolute -top-5 left-6 bg-purple-100 text-purple-700 px-4 py-1 text-xs font-semibold rounded-full shadow">Perú</div>
      <div class="flex items-center gap-4 mb-4">
        <i class="fas fa-coins text-purple-500 text-2xl"></i>

        <h3 class="text-xl font-semibold text-gray-800">Precio en Soles</h3>
      </div>
      <div class="text-5xl font-bold text-purple-700">S/ 200</div>
      <p class="text-gray-500 mt-2">Incluye certificado digital, acceso completo.</p>
    </div>

    <!-- Dólares -->
    <div class="relative group bg-white p-6 rounded-3xl shadow-xl border border-blue-400 hover:bg-blue-50 hover:scale-105 transition-all duration-300">
      <div class="absolute -top-5 left-6 bg-blue-100 text-blue-700 px-4 py-1 text-xs font-semibold rounded-full shadow">Internacional</div>
      <div class="flex items-center gap-4 mb-4">
        <i class="fas fa-globe-americas text-blue-500 text-2xl"></i>
        <h3 class="text-xl font-semibold text-gray-800">Precio en Dólares</h3>
      </div>
      <div class="text-5xl font-bold text-blue-700">$55</div>
      <p class="text-gray-500 mt-2">Ideal para estudiantes en el extranjero. Accede al mismo contenido completo.</p>
    </div>
  </div>
</div>


  <div class="max-w-7xl mx-auto px-4 md:px-20 py-12 bg-white font-baloo">
      <h2 class="mb-8 mt-10">
        <span  class="titulo-animado border-animado text-3xl text-purple-900 font-extrabold px-6 py-4" > Certificado digital</span>
      </h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    
    <!-- Card 1 -->
    <div class="rounded-2xl shadow-lg bg-gradient-to-br from-sky-400 to-cyan-400 text-white p-4 flex flex-col justify-between h-40 border-2 border-transparent hover:border-sky-700 hover:scale-105 transition-all duration-300">
      <div class="text-3xl"><i class="fas fa-university"></i></div>
      <div class="text-lg font-semibold leading-tight">
        Entidad Acreditadora<br /> <span class="text-blue-900 text-xl font-bold">Universidad Peruana Unión</span>

      </div>
      <div class="border-t border-white mt-2 w-full"></div>
    </div>

    <!-- Card 2 -->
    <div class="rounded-2xl shadow-lg bg-gradient-to-br from-purple-500 to-indigo-500 text-white p-4 flex flex-col justify-between h-40 border-2 border-transparent hover:border-purple-700 hover:scale-105 transition-all duration-300">
      <div class="text-3xl"><i class="fas fa-handshake"></i></div>
      <div class="text-lg font-semibold leading-tight">
        Alianza Estratégica<br /><span class="text-blue-900 text-xl font-bold">Instituto de Educación Laude</span>
      </div>
      <div class="border-t border-white mt-2 w-full"></div>
    </div>

    <!-- Card 3 -->
    <div class="rounded-2xl shadow-lg bg-gradient-to-br from-pink-500 to-rose-400  text-white p-4 flex flex-col justify-between h-40 border-2 border-transparent  hover:border-pink-700 hover:scale-105 transition-all duration-300">
      <div class="text-3xl"><i class="fas fa-chart-line"></i></div>
      <div class="text-lg font-semibold leading-tight">
        Especialización<br /><span class="text-purple-900 text-xl font-bold">Ciencia de Datos Aplicada con Python</span>
      </div>
      <div class="border-t border-white mt-2 w-full"></div>
    </div>

    <!-- Card 4 -->
    <div class="rounded-2xl shadow-lg bg-gradient-to-br from-orange-400 to-yellow-400 text-white p-4 flex flex-col justify-between h-40 border-2 border-transparent hover:border-orange-600 hover:scale-105 transition-all duration-300">
      <div class="text-3xl"><i class="fas fa-globe-americas"></i></div>
      <div class="text-lg font-semibold leading-tight">
        Reconocimiento<br /><span class="text-blue-900 text-xl font-bold">Nacional e Internacional</span>
      </div>
      <div class="border-t border-white mt-2 w-full"></div>
    </div>

  </div>
</div>







@push('js')

@endpush
<script>
  function enviarWhatsApp(e) {
    e.preventDefault();

    const nombres = document.getElementById('nombres').value.trim();
    const apellidos = document.getElementById('apellidos').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const celular = document.getElementById('celular').value.trim();
    const mensaje = `Hola, me quiero registrar al curso de Ciencia de Datos:\n\n*Nombre:* ${nombres} ${apellidos}\n*Correo:* ${correo}\n*Celular:* ${celular}`;
    const url = `https://wa.me/51957323789?text=${encodeURIComponent(mensaje)}`;
    window.open(url, '_blank');
  }
</script>


<script> 
  const observer = new IntersectionObserver((entries) => {
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
    observer.observe(el);
  });
</script>
@endsection

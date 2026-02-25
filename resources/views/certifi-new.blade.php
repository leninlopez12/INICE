<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar nuevo certificado') }}
        </h2>
    </x-slot>
    <div class="flex justify-center mt-4">
        <div class="flex items-center space-x-2 bg-gray-800 p-2 rounded-lg shadow-lg">
            <input 
                id="dni-buscar" 
                type="text" 
                class="form-control bg-gray-700 text-white rounded-md px-3 py-2 w-48 focus:ring focus:ring-blue-500" 
                placeholder="Buscar DNI">
            <button 
                id="buscar-dni" 
                type="button" 
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow transition">
                🔍
            </button>
        </div>
    </div>


    <div class="py-8 flex justify-center min-h-screen">
        <div class="max-w-6xl w-full bg-gray-900 p-6 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-bold text-white mb-6">Nuevo Certificado</h2>
            <form action="{{ route('certificado-store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-4">
                    <div class="col-span-1">
                        <label class="block text-gray-300">DNI</label>
                        <input type="text" name="DNI" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="DNI">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Apellidos</label>
                        <input type="text" name="APELLIDOS" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Apellidos">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Nombres</label>
                        <input type="text" name="NOMBRES" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Nombres">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">País</label>
                        <input type="text" name="PAIS" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="País">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Ciudad</label>
                        <input type="text" name="CIUDAD" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Ciudad">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Institución</label>
                        <input type="text" name="INSTITUCION" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Institución">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Profesión</label>
                        <input type="text" name="PROFESION" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Profesión">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Grado</label>
                        <input type="text" name="GRADO" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Grado">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Email</label>
                        <input type="email" name="EMAIL" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Email">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Celular</label>
                        <input type="text" name="CELULAR" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Celular">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">ID Evento</label>
                        <input type="text" name="ID_EVENTO" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="ID Evento">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Evento</label>
                        <input type="text" name="EVENTO" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Evento">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Año</label>
                        <input type="number" name="ANIO" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Año">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Fechas del Evento</label>
                        <input type="text" name="FECHAS_EVENTO" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Fechas del Evento">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Código</label>
                        <input type="text" name="CODIGO" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Código">
                    </div>
                    
                    <div class="col-span-1 md:col-span-3">
                        <label class="block text-gray-300">Observación</label>
                        <textarea name="OBSERVACION" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Observación"></textarea>
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Enlace 1</label>
                        <input type="text" name="ENLACE_1" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Enlace 1">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Enlace 2</label>
                        <input type="text" name="ENLACE_2" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Enlace 2">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Enlace 3</label>
                        <input type="text" name="ENLACE_3" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Enlace 3">
                    </div>
                </div>
                <div class="flex justify-end space-x-2">
                    <a href="{{ route('certificados-ad') }}" class="py-2 px-4 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                        Atrás
                    </a>
                    <button type="submit" class="btn-primary py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Guardar
                    </button>
                </div>

            </form>




        </div>
    </div>
    <script>
       document.getElementById('buscar-dni').addEventListener('click', function () {
            const dni = document.getElementById('dni-buscar').value;

            fetch("{{ route('buscar-dni') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({ dni: dni })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Actualizamos los campos del formulario
                    document.querySelector('[name="DNI"]').value = data.data.DNI || ''; // Campo DNI en el formulario
                    document.querySelector('[name="APELLIDOS"]').value = data.data.APELLIDOS || '';
                    document.querySelector('[name="NOMBRES"]').value = data.data.NOMBRES || '';
                    document.querySelector('[name="PAIS"]').value = data.data.PAIS || '';
                    document.querySelector('[name="CIUDAD"]').value = data.data.CIUDAD || '';
                    document.querySelector('[name="INSTITUCION"]').value = data.data.INSTITUCION || '';
                    document.querySelector('[name="PROFESION"]').value = data.data.PROFESION || '';
                    document.querySelector('[name="GRADO"]').value = data.data.GRADO || '';
                    document.querySelector('[name="EMAIL"]').value = data.data.EMAIL || '';
                    document.querySelector('[name="CELULAR"]').value = data.data.CELULAR || '';
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });

    </script>
</x-app-layout>

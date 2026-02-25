<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Certificado') }}
        </h2>
    </x-slot>

    <div class="py-8 flex justify-center min-h-screen">
        <div class="max-w-6xl w-full bg-gray-900 p-6 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-bold text-white mb-6">Editar Certificado</h2>
            <form action="{{ route('certificado-actualizar', $certificado->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-4">
                    <div class="col-span-1">
                        <label class="block text-gray-300">DNI</label>
                        <input type="text" name="DNI" value="{{ old('DNI', $certificado->DNI) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="DNI">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Apellidos</label>
                        <input type="text" name="APELLIDOS" value="{{ old('APELLIDOS', $certificado->APELLIDOS) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Apellidos">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Nombres</label>
                        <input type="text" name="NOMBRES" value="{{ old('NOMBRES', $certificado->NOMBRES) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Nombres">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">País</label>
                        <input type="text" name="PAIS" value="{{ old('PAIS', $certificado->PAIS) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="País">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Ciudad</label>
                        <input type="text" name="CIUDAD" value="{{ old('CIUDAD', $certificado->CIUDAD) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Ciudad">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Institución</label>
                        <input type="text" name="INSTITUCION" value="{{ old('INSTITUCION', $certificado->INSTITUCION) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Institución">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Profesión</label>
                        <input type="text" name="PROFESION" value="{{ old('PROFESION', $certificado->PROFESION) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Profesión">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Grado</label>
                        <input type="text" name="GRADO" value="{{ old('GRADO', $certificado->GRADO) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Grado">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Email</label>
                        <input type="email" name="EMAIL" value="{{ old('EMAIL', $certificado->EMAIL) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Email">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Celular</label>
                        <input type="text" name="CELULAR" value="{{ old('CELULAR', $certificado->CELULAR) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Celular">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">ID Evento</label>
                        <input type="text" name="ID_EVENTO" value="{{ old('ID_EVENTO', $certificado->ID_EVENTO) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="ID Evento">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Evento</label>
                        <input type="text" name="EVENTO" value="{{ old('EVENTO', $certificado->EVENTO) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Evento">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Año</label>
                        <input type="number" name="ANIO" value="{{ old('ANIO', $certificado->ANIO) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Año">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Fechas del Evento</label>
                        <input type="text" name="FECHAS_EVENTO" value="{{ old('FECHAS_EVENTO', $certificado->FECHAS_EVENTO) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Fechas del Evento">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Código</label>
                        <input type="text" name="CODIGO" value="{{ old('CODIGO', $certificado->CODIGO) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Código">
                    </div>
                    
                    <div class="col-span-1 md:col-span-3">
                        <label class="block text-gray-300">Observación</label>
                        <textarea name="OBSERVACION" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Observación">{{ old('OBSERVACION', $certificado->OBSERVACION) }}</textarea>
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Enlace 1</label>
                        <input type="text" name="ENLACE_1" value="{{ old('ENLACE_1', $certificado->ENLACE_1) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Enlace 1">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Enlace 2</label>
                        <input type="text" name="ENLACE_2" value="{{ old('ENLACE_2', $certificado->ENLACE_2) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Enlace 2">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-gray-300">Enlace 3</label>
                        <input type="text" name="ENLACE_3" value="{{ old('ENLACE_3', $certificado->ENLACE_3) }}" class="form-control bg-gray-800 text-white rounded-md w-full" placeholder="Enlace 3">
                    </div>
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('certificados-ad') }}" class="py-2 px-4 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                        Atrás
                    </a>
                    <button type="submit" class="btn-primary py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

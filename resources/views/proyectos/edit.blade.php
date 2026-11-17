@props(['id'])
<x-layout :titulo='"Modificar proyecto {$id}"'>
   @forelse (config('marcapersonalfp.proyectos') as $key => $proyecto)
    @if ($id == $proyecto['docente_id'])
        <div class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-sm">
            <form action="" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="nombre" class="mb-2 block text-sm font-medium text-gray-700">
                        Docente del proyecto
                    </label>
                    <input
                        type="number"
                        id="docente_id"
                        name="docente_id"
                        value="{{ old('docente_id', $proyecto['docente_id']) }}"
                        placeholder="Añadir aqui el id del docente del proyecto"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-800 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    >
                    @error('docente_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="nombre" class="mb-2 block text-sm font-medium text-gray-700">
                        Nombre del proyecto
                    </label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre') ?? $proyecto['nombre'] }}"
                        placeholder="Añadir aqui el nombre del proyecto"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-800 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    >
                    @error('nombre')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="dominio" class="mb-2 block text-sm font-medium text-gray-700">
                        Dominio del proyecto
                    </label>
                    <input
                        type="text"
                        id="dominio"
                        name="dominio"
                        value="{{ old('dominio') ?? $proyecto['dominio'] }}"
                        placeholder="Añadir aqui el dominio del proyecto"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-800 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    >
                    @error('dominio')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="dominio" class="mb-2 block text-sm font-big text-gray-900">
                        Metadatos del proyecto
                    </label>
                    <label for="fechaInicio" class="mb-2 block text-sm font-small text-gray-600">
                        Fecha de inicio del proyecto.
                    </label>
                    <input
                        type="date"
                        id="fechaInicio"
                        name="metadatos[fecha_inicio]"
                        value="{{ old('metadatos.fecha_inicio') ?? $proyecto['metadatos']['fecha_inicio'] }}"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-800 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    >
                    @error('metadatos.fecha_inicio')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <label for="fechaInicio" class="mb-2 block text-sm font-small text-gray-600">
                        Fecha de fin del proyecto.
                    </label>
                    <input
                        type="date"
                        id="fecha_fin"
                        name="metadatos[fecha_fin]"
                        value="{{ old('metadatos.fecha_fin') ?? $proyecto['metadatos']['fecha_fin'] }}"
                        placeholder="Añadir aqui la fecha del fin del metadato del proyecto"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-800 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    >
                    @error('metadatos.fecha_fin')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <label for="fechaInicio" class="mb-2 block text-sm font-small text-gray-600">
                        Calificacion del proyecto.
                    </label>
                    <input
                        type="number"
                        id="calificacion"
                        name="metadatos[calificacion]"
                        value="{{ old('metadatos.calificacion') ?? $proyecto['metadatos']['calificacion'] }}"
                        placeholder="Añadir aqui la calificacion del metadato del proyecto"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-800 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
                    >
                    @error('metadatos.calificacion')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        Guardar proyecto
                    </button>
                </div>
            </form>
        </div>
    @endif
    @empty
        <div>No existe ningun proyecto</div>
    @endforelse
</x-layout>
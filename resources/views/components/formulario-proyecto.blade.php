@props(['target', 'buttonMessage', 'proyecto' => null])
    <form action="{{ $target }}" method="POST">
        @csrf
        @isset($proyecto)
            @method('PUT')
        @endisset
        <div>
            <label for="nombre" class="block font-semibold">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $proyecto['nombre'] ?? null) }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('nombre')])>
            @error('nombre')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="docente_id" class="block font-semibold">Docente</label>
            <input type="number" name="docente_id" id="docente_id" value="{{ old('docente_id', $proyecto['docente_id'] ?? null) }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('docente_id')])>
            @error('docente_id')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="dominio" class="block font-semibold">Dominio</label>
            <input type="text" name="dominio" id="dominio" value="{{ old('dominio', $proyecto['dominio'] ?? null) }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('dominio')])>
            @error('dominio')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="fecha_inicio" class="block font-semibold">Fecha de inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $proyecto['metadatos']['fecha_inicio'] ?? null) }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('fecha_inicio')])>
            @error('fecha_inicio')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="fecha_fin" class="block font-semibold">Fecha de fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin', $proyecto['metadatos']['fecha_fin'] ?? null) }}"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('fecha_fin')])>
            @error('fecha_fin')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="calificacion" class="block font-semibold">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" value="{{ old('calificacion', $proyecto['metadatos']['calificacion'] ?? null) }}" step="0.1"
                @class(['mt-1 w-full rounded border p-2', 'border-red-500' => $errors->has('calificacion')])>
            @error('calificacion')
                <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-4">
            <x-dopetrope.boton type="submit">
                {{ $buttonMessage }}
            </x-dopetrope.boton>
            <x-dopetrope.boton :href="route('proyectos.index')" alt>
                Volver al listado
            </x-dopetrope.boton>
        </div>
    </form>

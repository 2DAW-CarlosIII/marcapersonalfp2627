@props(['proyecto', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">
        <img src="{{ asset('images/mp-logo.png') }}" alt="" class="h-40 object-contain">

        <div class="space-y-3 sm:col-span-2">
            <h2 class="text-2xl font-semibold">{{ $proyecto['nombre'] }}</h2>
            <p>
                <strong>Repositorio:</strong>
                <a href="https://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}" class="text-blue-700 hover:underline">
                    github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                </a>
            </p>
            <p><strong>Docente:</strong> {{ $proyecto['docente_id'] }}</p>
            <ul class="list-inside list-disc">
                @foreach ($proyecto['metadatos'] as $clave => $valor)
                    <li>{{ $clave }}: {{ $valor }}</li>
                @endforeach
            </ul>

            <p @class([
                'mt-2 font-bold',
                'text-green-700' => $proyecto['metadatos']['calificacion'] >= 5,
                'text-red-700' => $proyecto['metadatos']['calificacion'] < 5,
            ])>{{ $proyecto['metadatos']['calificacion'] }}</p>
            <p>
                @if ($proyecto['metadatos']['calificacion'] >= 5)
                    Proyecto aprobado
                @else
                    Proyecto suspenso
                @endif
            </p>

            <div class="flex gap-3 pt-2">
                <a href="{{ route('proyectos.edit', $id) }}" class="rounded bg-yellow-500 px-4 py-2 font-semibold text-white hover:bg-yellow-600">
                    Editar proyecto
                </a>
                <a href="{{ route('proyectos.index') }}" class="rounded border px-4 py-2 hover:bg-gray-50">
                    Volver al listado
                </a>
            </div>
        </div>
    </li>


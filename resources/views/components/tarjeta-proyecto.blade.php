@props(['proyecto', 'id'])

<li class="rounded-lg bg-white p-4 shadow">
    <h2 class="text-lg font-semibold">{{ $proyecto['nombre'] }}</h2>
    <p class="text-sm text-gray-500">
        {{ $proyecto['metadatos']['fecha_inicio'] }} – {{ $proyecto['metadatos']['fecha_fin'] }}
    </p>
    <p @class([
        'mt-2 font-bold',
        'text-green-700' => $proyecto['metadatos']['calificacion'] >= 5,
        'text-red-700' => $proyecto['metadatos']['calificacion'] < 5,
    ])>{{ $proyecto['metadatos']['calificacion'] }}</p>
    <a href="{{ route('proyectos.show', $id) }}" class="mt-3 inline-block text-blue-700 hover:underline">
        Más información
    </a>
</li>
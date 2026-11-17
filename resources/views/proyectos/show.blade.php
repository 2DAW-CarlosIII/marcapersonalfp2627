@props(['id'=>null])
<x-layout :titulo='"Vista detalle proyecto  {$id}"'>
   @forelse (config('marcapersonalfp.proyectos') as $id => $proyecto)
    @if ($id == $proyecto['docente_id'])
        <div class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-sm">
            <h1 class="mb-2 block text-sm font-medium text-gray-700"><strong> Nombre:</strong> {{$proyecto['nombre']}}</h1>
            <p class="mb-2 block text-sm font-medium text-gray-700"><strong> Dominio:</strong> {{$proyecto['dominio']}}</p>
            <ul class="mb-2 block text-sm font-medium text-gray-700"><strong>Metadatos:</strong>
                <li>Fecha inicio:  {{$proyecto['metadatos']['fecha_inicio']}}</li>
                <li>Fecha fin: {{$proyecto['metadatos']['fecha_fin']}}</li>
                <li>Calificacion: {{$proyecto['metadatos']['calificacion']}}</li>
            </ul>
        </div>
    @endif
    @empty
        <div>No existe ningun proyecto</div>
    @endforelse
</x-layout>
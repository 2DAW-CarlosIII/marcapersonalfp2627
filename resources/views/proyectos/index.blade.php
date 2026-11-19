<x-layout titulo="Listado de Proyectos">
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($proyectos as $id => $proyecto)
        <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id" />
    @empty
        <p>Todavia no hay proyectos</p>
    @endforelse
    </ul>
</x-layout>

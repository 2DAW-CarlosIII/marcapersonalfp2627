<x-layout titulo="Listado proyectos">
    <ul class="grid gap-4 sm:grid-cols-2">
        @forelse ($proyectos as $id => $proyecto)
            <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id" />
        @empty
            <li>Todavía no hay proyectos</li>    
        @endforelse
    </ul>
</x-layout>    
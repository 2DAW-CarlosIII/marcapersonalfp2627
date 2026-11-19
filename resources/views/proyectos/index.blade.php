<x-layout>
    <x-slot:title>Listado proyectos</x-slot:title>

    <ul class="grid gap-4 sm:grid-cols-2">
        @forelse ($proyectos as $id => $proyecto)
            <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id" />
        @empty
            <li class="col-span-full text-gray-500">Todavía no hay proyectos</li>
        @endforelse
    </ul>
</x-layout>

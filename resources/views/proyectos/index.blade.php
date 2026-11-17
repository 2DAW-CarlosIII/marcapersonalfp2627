<x-layout :titulo="'Listado de Proyectos'">
@forelse ($proyectos as $id => $proyecto)
    <li>{{ $proyecto['nombre'] }}</li>
@empty
    <li>Todavía no hay proyectos.</li>
@endforelse
</x-layout>
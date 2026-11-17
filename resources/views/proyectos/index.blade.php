<x-layout :titulo="Listado de proyectos">
@forelse ($proyectos as $id => $proyecto)
    <li>{{ $proyecto['nombre'] }}</li>
@empty
    <li>Todavía no hay proyectos.</li>
@endforelse
</x-layout>
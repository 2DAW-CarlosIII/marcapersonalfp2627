<x-layout :id="$id">
    <h1>Modificar proyecto {{ $id }}</h1>

    <x-formulario-proyecto
        :proyecto="$proyecto"
        :target="route('proyectos.update', $id)"
        buttonMessage="Modificar proyecto"
    />
</x-layout>

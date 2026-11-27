<x-layout>
    <h1>Añadir proyecto</h1>

    <x-formulario-proyecto
        :proyecto="null"
        :target="route('proyectos.store')"
        buttonMessage="Añadir proyecto"
    />
</x-layout>
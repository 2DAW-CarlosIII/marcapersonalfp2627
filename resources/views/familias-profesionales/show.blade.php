<x-layout :titulo="'Vista detalle Familia Profesional ' . $id">
    @isset($familiaProfesional)
        <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-familia-profesional-detalle :familiaProfesional="$familiaProfesional" :id="$id" />
        </ul>
    @endisset
</x-layout>
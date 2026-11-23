<x-layout titulo="Familias profesionales">
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($familiasProfesionales as $id => $familiaProfesional)
    <x-tarjeta-familia-profesional :familiaProfesional="$familiaProfesional" :id="$id" />
    @empty
        <li>Todavía no hay Familias Profesionales.</li>
    @endforelse
    </ul>
</x-layout>


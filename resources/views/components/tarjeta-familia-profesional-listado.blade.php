@props(['familiaProfesional', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3 sm:col-span-2">
            <p><strong>Código</strong> {{ $familiaProfesional['codigo'] }}</p>
            <h2 class="text-2xl font-semibold">{{ $familiaProfesional['nombre'] }}</h2>

            <div class="flex gap-3 pt-2">
                <x-dopetrope.boton :href="route('familias-profesionales.show', $id)">
                    Detalles
                </x-dopetrope.boton>
            </div>
        </div>
    </li>


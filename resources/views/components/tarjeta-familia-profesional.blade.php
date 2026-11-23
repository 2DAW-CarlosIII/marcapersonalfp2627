@props(['familiaProfesional', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3 sm:col-span-2">
            <h2 class="text-2xl font-semibold">
                <a href="{{ route('familias-profesionales.show', $id) }}"> {{ $familiaProfesional['nombre'] }}</a>
            </h2>
            <p><strong>Código</strong> {{ $familiaProfesional['codigo'] }}</p>
            <p><strong>Descripción</strong> {{ $familiaProfesional['descripcion'] }}</p>

            <div class="flex gap-3 pt-2">
                <x-dopetrope.boton :href="route('familias-profesionales.edit', $id)">
                    Editar Familia Profesional
                </x-dopetrope.boton>
                <x-dopetrope.boton :href="route('familias-profesionales.index')" alt>
                    Volver al listado
                </x-dopetrope.boton>
            </div>
        </div>
    </li>


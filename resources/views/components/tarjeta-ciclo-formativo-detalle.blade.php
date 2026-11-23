@props(['cicloFormativo', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3 sm:col-span-2">
            <h2 class="text-2xl font-semibold">
                <a href="{{ route('ciclos-formativos.show', $id) }}"> {{ $cicloFormativo['nombre'] }}</a>
            </h2>
            <p><strong>Código</strong> {{ $cicloFormativo['codigo'] }}</p>
            <p><strong>Familia Profesional</strong> {{ $cicloFormativo['codigo_familia'] }}</p>
            <div @class([
                'font-bold',
                'text-blue-700' => $cicloFormativo['grado'] === 'basico',
                'text-yellow-400' => $cicloFormativo['grado'] === 'medio',
                'text-orange-700' => $cicloFormativo['grado'] === 'superior',
            ])>{{ $cicloFormativo['grado'] }}</div>
            <p><strong>Descripción</strong> {{ $cicloFormativo['descripcion'] }}</p>

            <div class="flex gap-3 pt-2">
                <x-dopetrope.boton :href="route('ciclos-formativos.edit', $id)">
                    Editar Ciclo Formativo
                </x-dopetrope.boton>
                <x-dopetrope.boton :href="route('ciclos-formativos.index')" alt>
                    Volver al listado
                </x-dopetrope.boton>
            </div>
        </div>
    </li>


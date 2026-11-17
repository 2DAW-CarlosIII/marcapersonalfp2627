<x-layout>
    <x-slot:title>Perfil</x-slot:title>

    <div class="bg-white p-6 rounded shadow">
        @isset($id)
            <p class="text-lg">Visualizar el currículo de <strong>{{ $id }}</strong></p>
        @else
            <p class="text-lg">Visualizar el currículo propio</p>
        @endisset
    </div>
</x-layout>
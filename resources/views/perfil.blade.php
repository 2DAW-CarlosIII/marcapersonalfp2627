<x-layout titulo="Perfil">
    @isset($id)
        <p>Visualizar el currículo de {{ $id }}</p>
    @else
        <p>Visualizar el currículo propio</p>
    @endisset
</x-layout>

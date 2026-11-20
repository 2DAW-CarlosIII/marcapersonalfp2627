<x-layout titulo="Perfil">
    @isset($id)
    <p>Visualizar el currículo de {{ $id }}</p>
    @endisset
    <p>Visualizar el currículo propio </p>
</x-layout>
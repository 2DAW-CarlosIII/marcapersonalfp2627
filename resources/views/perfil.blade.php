<x-layout titulo="Perfil">
@isset($id)
    Visualizar el currículo de {{ $id }}
@else
    Visualizar el currículo propio
@endisset
</x-layout>

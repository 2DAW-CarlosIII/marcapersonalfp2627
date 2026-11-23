<x-layout :id="$id">
    <h1>Perfil</h1>
    <p>Visualizar el currículo
        @isset($id)
            de {{ $id }}
        @else
            propio
        @endisset
    </p>
</x-layout>

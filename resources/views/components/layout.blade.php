@props(['titulo' => null])

<x-dopetrope.layout :titulo="$titulo">
    {{ $slot }}
</x-dopetrope.layout>

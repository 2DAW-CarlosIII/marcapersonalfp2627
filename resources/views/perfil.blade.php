@props(['id'=>null])
<x-layout>
    <div class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-sm">Visualizar el currículo  {{($id ? 'de ' . $id : 'propio')}}</div>
</x-layout>
<x-layout title="Vista detalle proyecto {{ $id }}">
    
     <ul class="grid gap-4 sm:grid-cols-2">
  <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id"/>


    </ul>
</x-layout>


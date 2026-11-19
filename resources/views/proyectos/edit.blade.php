@props(['id','proyecto'])
<x-layout :titulo='"Modificar proyecto {$id}"'>
    @isset($proyecto)
    <ul class="grid gap-4 sm:grid-cols-2">
        <form>Formulario de edicion</form>
    </ul>
@endisset
</x-layout>           
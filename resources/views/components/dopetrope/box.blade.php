@props(['imagen', 'titulo', 'subtitulo' => null])

<section class="border-b border-[#ccc] bg-white px-7 pb-11">
    <a href="#" class="-mx-7 mb-10 block"><img src="{{ $imagen }}" alt="" class="w-full"></a>

    <header class="mb-6">
        <h3 class="text-2xl text-dope-dark">{{ $titulo }}</h3>
        @if ($subtitulo)
            <p class="mt-2 italic">{{ $subtitulo }}</p>
        @endif
    </header>

    {{ $slot }}

    @isset($footer)
        <footer class="mt-9">
            <ul class="flex flex-wrap gap-4">
                {{ $footer }}
            </ul>
        </footer>
    @endisset
</section>
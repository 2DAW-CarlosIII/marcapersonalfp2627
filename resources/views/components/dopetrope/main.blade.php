@props(['titulo' => null])

@php
    $portfolio = [
        'Ipsum feugiat et dolor',
        'Sed etiam lorem nulla',
        'Consequat et tempus',
        'Blandit sed adipiscing',
        'Etiam nisl consequat',
        'Dolore nisl feugiat',
    ];
    $blog=[
        'Las bondades del desarrollo servidor',
        'No hay nada mejor que laravel'
    ]
@endphp

<main id="main" class="bg-dope-light py-16">
    <div class="mx-auto max-w-[1200px] px-6">

        {{-- Content: el contenido propio de cada vista --}}
        <section>
            <header class="relative mt-4 mb-12 border-t border-[#ccc] text-center">
                <h1 class="relative -top-[0.65em] inline bg-dope-light px-4 text-3xl text-dope-dark">{{ $titulo ?? config('app.name') }}</h1>
            </header>

            {{ $slot }}
        </section>

        {{-- Portfolio --}}
        <x-dopetrope.seccion titulo="My Portfolio">
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($portfolio as $titular)
                    <x-dopetrope.box :titulo="$titular" :imagen="'https://picsum.photos/seed/dopetrope-' . $loop->iteration . '/800/450'">
                        <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>

                        <x-slot:footer>
                            <li><x-dopetrope.boton alt>Find out more</x-dopetrope.boton></li>
                        </x-slot:footer>
                    </x-dopetrope.box>
                @endforeach
            </div>
        </x-dopetrope.seccion>

        {{-- Blog --}}
              <x-dopetrope.seccion titulo="The Blog">
            <div class="grid gap-12 lg:grid-cols-2">
                @foreach ($blog as $titular)
                    <x-dopetrope.box :titulo="$titular" subtitulo="Posted 45 minutes ago" :imagen="'https://picsum.photos/seed/dopetrope-' . $loop->iteration . '/800/450'">
                        
                        <x-slot:footer>
                            <li>
                                <x-dopetrope.boton><x-dopetrope.icono nombre="documento" class="size-4" /> Continue Reading</x-dopetrope.boton>
                                <x-dopetrope.boton alt><x-dopetrope.icono nombre="comentario" class="size-4" /> 33 comments</x-dopetrope.boton>
                            </li>
                        </x-slot:footer>
                    </x-dopetrope.box>
                @endforeach
            </div>
        </x-dopetrope.seccion>

    </div>
</main>
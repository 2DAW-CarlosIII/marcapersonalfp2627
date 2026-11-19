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
@endphp
<main id="main" class="bg-dope-light py-16">
    <div class="mx-auto max-w-[1200px] px-6">


        {{-- Contenido de la vista: justo antes del portfolio --}}
        <x-dopetrope.seccion :titulo="$titulo ?? config('app.name')">
            {{ $slot }}
        </x-dopetrope.seccion>


        {{-- Portfolio --}}
        <x-dopetrope.seccion titulo="My Portfolio">
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($portfolio as $tituloCaja)
                    <x-dopetrope.box
                        :imagen="'https://picsum.photos/seed/dopetrope-' . $loop->iteration . '/800/450'"
                        :titulo="$tituloCaja">
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
                <x-dopetrope.box imagen="https://picsum.photos/seed/dopetrope-08/1000/500"
                    titulo="Magna tempus consequat" subtitulo="Posted 45 minutes ago">
                    <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
                    <x-slot:footer>
                        <li><x-dopetrope.boton><x-dopetrope.icono nombre="documento" class="size-4" /> Continue Reading</x-dopetrope.boton></li>
                        <li><x-dopetrope.boton alt><x-dopetrope.icono nombre="comentario" class="size-4" /> 33 comments</x-dopetrope.boton></li>
                    </x-slot:footer>
                </x-dopetrope.box>


                <x-dopetrope.box imagen="https://picsum.photos/seed/dopetrope-09/1000/500"
                    titulo="Aptent veroeros aliquam" subtitulo="Posted 45 minutes ago">
                    <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
                    <x-slot:footer>
                        <li><x-dopetrope.boton><x-dopetrope.icono nombre="documento" class="size-4" /> Continue Reading</x-dopetrope.boton></li>
                        <li><x-dopetrope.boton alt><x-dopetrope.icono nombre="comentario" class="size-4" /> 33 comments</x-dopetrope.boton></li>
                    </x-slot:footer>
                </x-dopetrope.box>
            </div>
        </x-dopetrope.seccion>


    </div>
</main>

@php
    $noticias = [
        ['Jan', '27', 'Lorem dolor sit amet veroeros', 'Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.'],
        ['Jan', '23', 'Ipsum sed blandit nisl consequat', 'Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.'],
        ['Jan', '15', 'Magna tempus lorem feugiat', 'Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.'],
        ['Jan', '12', 'Dolore tempus ipsum feugiat nulla', 'Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.'],
        ['Jan', '10', 'Blandit tempus aliquam?', 'Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.'],
    ];
    $enlaces = [
        'Lorem ipsum dolor sit amet sit veroeros',
        'Sed et blandit consequat sed tlorem blandit',
        'Adipiscing feugiat phasellus sed tempus',
        'Hendrerit tortor vitae mattis tempor sapien',
        'Sem feugiat sapien id suscipit magna felis nec',
        'Elit class aptent taciti sociosqu ad litora',
    ];
    // [icono, nombre accesible, colores]
    $redes = [
        ['facebook', 'Facebook', 'bg-[#3c5a98] hover:bg-[#4c6aa8]'],
        ['twitter', 'Twitter', 'bg-[#2daae4] hover:bg-[#3dbaf4]'],
        ['dribbble', 'Dribbble', 'bg-[#c4376b] hover:bg-[#d4477b]'],
        ['tumblr', 'Tumblr', 'bg-[#2b4661] hover:bg-[#3b5671]'],
        ['linkedin', 'LinkedIn', 'bg-[#006599] hover:bg-[#1075a9]'],
    ];
@endphp
<footer id="footer" class="py-16 text-dope-footer">
    <div class="mx-auto grid max-w-[1200px] gap-x-12 gap-y-16 px-6 lg:grid-cols-3">


        {{-- Fechas --}}
        <section class="lg:col-span-2">
            <header class="mb-12">
                <h2 class="text-[1.75em] text-white">Blandit nisl adipiscing</h2>
            </header>
            <ul>
                @foreach ($noticias as [$mes, $dia, $titulo, $texto])
                    <li class="group relative border-t border-white/5 py-5 pl-[6.75em] first:border-t-0 first:pt-0">
                        <span class="absolute top-5 left-0 block h-[3.5em] rounded-l-[5px] bg-dope-red pt-2 pr-3 pl-4 text-center leading-none text-white group-first:top-0 after:absolute after:-right-[1.2em] after:bottom-0 after:border-y-[1.8em] after:border-l-[1.25em] after:border-y-transparent after:border-l-dope-red">{{ $mes }} <strong class="block pt-[0.15em] text-[1.75em] font-normal">{{ $dia }}</strong></span>
                        <h3 class="text-xl"><a href="#" class="text-white">{{ $titulo }}</a></h3>
                        <p>{{ $texto }}</p>
                    </li>
                @endforeach
            </ul>
        </section>


        {{-- Qué es esto --}}
        <section>
            <header class="mb-12">
                <h2 class="text-[1.75em] text-white">What's this all about?</h2>
            </header>
            <a href="#" class="mb-8 block"><img src="https://picsum.photos/seed/dopetrope-10/800/450" alt="" class="w-full rounded-[5px]"></a>
            <p>
                This is <strong class="font-normal text-white">Dopetrope</strong> a free, fully responsive HTML5 site template by
                <a href="http://twitter.com/ajlkn" class="text-dope-footer-link underline hover:no-underline">AJ</a> for <a href="http://html5up.net/" class="text-dope-footer-link underline hover:no-underline">HTML5 UP</a> It's released for free under
                the <a href="http://html5up.net/license/" class="text-dope-footer-link underline hover:no-underline">Creative Commons Attribution</a> license so feel free to use it for any personal or commercial project &ndash; just don't forget to credit us!
            </p>
            <footer class="mt-9">
                <x-dopetrope.boton>Find out more</x-dopetrope.boton>
            </footer>
        </section>


        {{-- Dos listas de enlaces --}}
        @foreach (['Tempus consequat', 'Ipsum et phasellus'] as $tituloLista)
            <section>
                <header class="mb-12">
                    <h2 class="text-[1.75em] text-white">{{ $tituloLista }}</h2>
                </header>
                <ul>
                    @foreach ($enlaces as $enlace)
                        <li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">{{ $enlace }}</a></li>
                    @endforeach
                </ul>
            </section>
        @endforeach


        {{-- Redes sociales y contacto --}}
        <section>
            <header class="mb-12">
                <h2 class="text-[1.75em] text-white">Vitae tempor lorem</h2>
            </header>
            <ul class="mb-12 flex flex-wrap gap-3">
                @foreach ($redes as [$icono, $nombre, $colores])
                    <li>
                        <a href="#" @class(['flex size-12 items-center justify-center rounded-[5px] text-white transition-colors', $colores])>
                            <x-dopetrope.icono :nombre="$icono" class="size-6" />
                            <span class="sr-only">{{ $nombre }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul>
                <li class="group relative border-t border-white/5 py-5 pl-28 first:border-t-0 first:pt-0">
                    <h3 class="absolute top-5 left-0 text-xl text-white group-first:top-0">Address</h3>
                    <p>
                        Untitled Incorporated<br>
                        1234 Somewhere Road Suite<br>
                        Nashville, TN 00000-0000
                    </p>
                </li>
                <li class="group relative border-t border-white/5 py-5 pl-28 first:border-t-0 first:pt-0">
                    <h3 class="absolute top-5 left-0 text-xl text-white group-first:top-0">Mail</h3>
                    <p><a href="#" class="text-dope-footer-link hover:text-white">someone@untitled.tld</a></p>
                </li>
                <li class="group relative border-t border-white/5 py-5 pl-28 first:border-t-0 first:pt-0">
                    <h3 class="absolute top-5 left-0 text-xl text-white group-first:top-0">Phone</h3>
                    <p>(800) 000-0000</p>
                </li>
            </ul>
        </section>


        {{-- Copyright --}}
        <div id="copyright" class="text-center lg:col-span-3">
            <ul class="inline-flex flex-wrap justify-center divide-x divide-white/5 rounded-[5px] bg-white/5 px-9 py-3.5">
                <li class="px-4">&copy; {{ config('marcapersonalfp.centro') }}</li>
                <li class="px-4">Design: <a href="http://html5up.net" class="text-dope-footer-link hover:text-white">HTML5 UP</a></li>
            </ul>
        </div>


    </div>
</footer>

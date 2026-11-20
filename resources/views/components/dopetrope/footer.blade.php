@php
$fechas = [
['dia' => 27, 'titulo' => 'Lorem dolor sit amet veroseros'],
['dia' => 23, 'titulo' => 'Hola mundo'],
['dia' => 15, 'titulo' => 'Todos ya'],
['dia' => 12, 'titulo' => 'A por todas'],
['dia' => 10, 'titulo' => 'Dia de examen']
];
$listasEnlaces = [
    'Lorem dolor sit amet veroseros',
    'Sed et blandit consequat sed',
];
$enlaces = [
    'Lorem dolor sit amet veroseros',
    'Lorem dolor sit amet veroseros',
    'Lorem dolor sit amet veroseros',
    'Lorem dolor sit amet veroseros',
    'Lorem dolor sit amet veroseros'
];
$iconos = [
"facebook",
"twitter",
"dribbble",
"tumblr",
"linkedin"
];
@endphp
<!-- Footer -->
	<footer id="footer" class="py-16 text-dope-footer">
		<div class="mx-auto grid max-w-[1200px] gap-x-12 gap-y-16 px-6 lg:grid-cols-3">

			<section class="lg:col-span-2">
				<header class="mb-12">
					<h2 class="text-[1.75em] text-white">Blandit nisl adipiscing</h2>
				</header>
			<ul>
    @foreach($fechas as $fecha)
        <li class="group relative border-t border-white/5 py-5 pl-[6.75em] first:border-t-0 first:pt-0">
            <span class="absolute top-5 left-0 block h-[3.5em] rounded-l-[5px] bg-dope-red pt-2 pr-3 pl-4 text-center leading-none text-white group-first:top-0 after:absolute after:-right-[1.2em] after:bottom-0 after:border-y-[1.8em] after:border-l-[1.25em] after:border-y-transparent after:border-l-dope-red">
                Jan <strong class="block pt-[0.15em] text-[1.75em] font-normal">{{ $fecha['dia'] }}</strong>
            </span>
            <h3 class="text-xl"><a href="#" class="text-white">{{ $fecha['titulo'] }}</a></h3>
            <p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
        </li>
    @endforeach
</ul>

			</section>

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
                    <x-dopetrope.boton href="#">Find out more</x-dopetrope.boton>
				
				</footer>
			</section>
            @foreach ($listasEnlaces as $listasEnlace)
			<section>
				<header class="mb-12">
					<h2 class="text-[1.75em] text-white">{{$listasEnlace}}</h2>
				</header>
				<ul>
                    @foreach ($enlaces as $enlace)
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Lorem ipsum dolor sit amet sit veroeros</a></li>
					@endforeach
				</ul>
			</section>
            @endforeach
			<section>
				<header class="mb-12">
					<h2 class="text-[1.75em] text-white">Ipsum et phasellus</h2>
				</header>
				<ul>
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Lorem ipsum dolor sit amet sit veroeros</a></li>
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Sed et blandit consequat sed tlorem blandit</a></li>
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Adipiscing feugiat phasellus sed tempus</a></li>
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Hendrerit tortor vitae mattis tempor sapien</a></li>
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Sem feugiat sapien id suscipit magna felis nec</a></li>
					<li class="border-t border-white/5 py-4 first:border-t-0 first:pt-0"><a href="#" class="text-dope-footer-link hover:text-white">Elit class aptent taciti sociosqu ad litora</a></li>
				</ul>
			</section>

			<section>
				<header class="mb-12">
					<h2 class="text-[1.75em] text-white">Vitae tempor lorem</h2>
				</header>
				<ul class="mb-12 flex flex-wrap gap-3">
    				@foreach($iconos as $icono)
        				<x-dopetrope.icono nombre="{{$icono}}" class="size-4"/>
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

			<!-- Copyright -->
			<div id="copyright" class="text-center lg:col-span-3">
				<ul class="inline-flex flex-wrap justify-center divide-x divide-white/5 rounded-[5px] bg-white/5 px-9 py-3.5">
					<li class="px-4">&copy; {{ config('marcapersonalfp.centro') }}</li>
					<li class="px-4">Design: <a href="http://html5up.net" class="text-dope-footer-link hover:text-white">HTML5 UP</a></li>
				</ul>
			</div>

		</div>
    </footer>
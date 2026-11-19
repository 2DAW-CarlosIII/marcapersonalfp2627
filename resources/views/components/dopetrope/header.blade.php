	<!-- Header -->
	<section id="header" class="border-b border-[#ccc] bg-white text-center">

		<x-navbar />

		<!-- Banner -->
		<section id="banner" class="mt-12 bg-[#cce8f4] bg-[url(https://picsum.photos/seed/dopetrope-banner/1600/700)] bg-cover bg-center px-4 py-20 md:py-32">
			<header class="inline-block rounded-[5px] bg-dope-dark/95 px-8 py-8 md:px-20 md:py-10">
				<h2 class="mb-[0.65em] text-3xl font-bold text-white md:text-5xl">Howdy. This is Dopetrope.</h2>
				<p class="text-xl text-dope-red md:text-2xl">A responsive template by HTML5 UP</p>
			</header>
		</section>

		<!-- Intro -->
		<section id="intro" class="mx-auto max-w-[1200px] px-6 pb-16">
			<div class="grid md:grid-cols-3">
				<section class="my-4 px-6 py-10 md:my-12">
					<span class="relative mb-[4.5em] inline-block w-36 rounded-t-[5px] bg-dope-red pt-7 pb-3 text-white after:absolute after:-bottom-[1.95em] after:left-0 after:border-x-[4.5rem] after:border-t-[2em] after:border-x-transparent after:border-t-dope-red">
                         <x-dopetrope.icono nombre="engranaje" class="mx-auto size-[4.5rem]" />
                    </span>
					<header class="mb-6">
						<h2 class="text-3xl text-dope-dark">Ipsum consequat</h2>
					</header>
					<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
				</section>
				<section class="my-4 px-6 py-10 md:my-12 md:shadow-[-24px_0_24px_-24px_rgb(0_0_0/0.25),24px_0_24px_-24px_rgb(0_0_0/0.25)]">
					<span class="relative mb-[4.5em] inline-block w-36 rounded-t-[5px] bg-dope-dark pt-7 pb-3 text-white after:absolute after:-bottom-[1.95em] after:left-0 after:border-x-[4.5rem] after:border-t-[2em] after:border-x-transparent after:border-t-dope-dark">
                        <x-dopetrope.icono nombre="rayo" class="mx-auto size-[4.5rem]" />					</span>
					<header class="mb-6">
						<h2 class="text-3xl text-dope-dark">Magna etiam dolor</h2>
					</header>
					<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
				</section>
				<section class="my-4 px-6 py-10 md:my-12">
					<span class="relative mb-[4.5em] inline-block w-36 rounded-t-[5px] bg-dope-gray pt-7 pb-3 text-white after:absolute after:-bottom-[1.95em] after:left-0 after:border-x-[4.5rem] after:border-t-[2em] after:border-x-transparent after:border-t-dope-gray">
						<x-dopetrope.icono nombre="estrella" class="mx-auto size-[4.5rem]" />
					</span>
					<header class="mb-6">
						<h2 class="text-3xl text-dope-dark">Tempus adipiscing</h2>
					</header>
					<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
				</section>
			</div>
			<footer>
				<ul class="flex flex-wrap justify-center gap-4">
                    <x-dopetrope.boton grande>Get Started</x-dopetrope.boton>       {{-- rojo, grande --}}
                    <x-dopetrope.boton grande alt>Learn More</x-dopetrope.boton>       {{-- negro, grande --}}
				</ul>
			</footer>
		</section>

	</section>
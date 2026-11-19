@props(['titulo'])

<section class="mt-16">
    <header class="relative mt-4 mb-12 border-t border-[#ccc] text-center">
        <h2 class="relative -top-[0.65em] inline bg-dope-light px-4 text-3xl text-dope-dark">{{ $titulo }}</h2>
    </header>

    {{ $slot }}
</section>
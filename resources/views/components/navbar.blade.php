<nav class="bg-white shadow">
    <div class="mx-auto flex max-w-5xl items-center gap-6 px-6 py-3">
        <a href="{{ url('/') }}"><img src="{{ asset('images/mp-logo.png') }}" alt="marcapersonalFP" class="h-12"></a>
        <a href="{{ route('proyectos.index') }}" @class([
            'font-semibold',
            'text-blue-700' => request()->routeIs('proyectos.*'),
            'text-gray-600 hover:text-gray-900' => ! request()->routeIs('proyectos.*'),
        ])>Proyectos</a>
        <a href="{{ route('perfil') }}" @class([
            'font-semibold',
            'text-blue-700' => request()->routeIs('perfil'),
            'text-gray-600 hover:text-gray-900' => ! request()->routeIs('perfil'),
        ])>Mi perfil</a>
    </div>
</nav>

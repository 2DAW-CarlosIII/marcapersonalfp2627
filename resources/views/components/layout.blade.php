@props(['titulo' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $titulo ? $titulo . ' · ' : '' }}{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-800">
    <x-navbar />

    <main class="mx-auto max-w-5xl p-6">
        @isset($titulo)
            <h1 class="mb-6 text-3xl font-bold">{{ $titulo }}</h1>
        @endisset

        {{ $slot }}
    </main>

    <footer class="py-6 text-center text-sm text-gray-500">
        {{ config('marcapersonalfp.centro') }}
    </footer>
</body>
</html>

@props(['titulo' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $titulo ? $titulo . ' · ' : '' }}{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=source-sans-3:300,300i,400,700,900" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dope-dark font-dopetrope text-lg leading-[1.75] font-light text-dope-text">

    <x-dopetrope.header />

    <x-dopetrope.main :titulo="$titulo">
        {{ $slot }}
    </x-dopetrope.main>

    <x-dopetrope.footer/>

</body>
</html>

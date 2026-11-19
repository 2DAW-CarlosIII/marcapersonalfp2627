@props(['href' => '#', 'alt' => false, 'grande' => false])

<a href="{{ $href }}" @class([
    'inline-flex items-center justify-center gap-2 rounded-[5px] font-bold text-white transition-colors',
    'px-6 py-2.5' => ! $grande,
    'min-w-[12em] px-9 py-4 text-2xl' => $grande,
    'bg-dope-red hover:bg-dope-red-hover' => ! $alt,
    'bg-dope-dark hover:bg-dope-dark-hover' => $alt,
])>{{ $slot }}</a>
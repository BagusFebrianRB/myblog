@props(['href', 'current' => false])

@php
    if ($current) {
        $classes = 'bg-white text-gray-950 font-semibold';
    } else {
        $classes = 'text-slate-400 hover:text-white hover:bg-white/10';
    }
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'px-4 py-1.5 text-sm tracking-wide rounded-full transition-colors duration-150 ' . $classes,
        'aria-current' => $current ? 'page' : false,
    ]) }}>{{ $slot }}</a>

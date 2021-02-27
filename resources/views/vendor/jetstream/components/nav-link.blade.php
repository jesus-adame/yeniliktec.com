@props(['active'])

@php
$classes = ($active ?? false)
        ? 'text-lg px-3 py-2 rounded-sm font-bold bg-white transition duration-150 ease-in-out'
        : 'text-lg px-3 py-2 mx-2 font-bold text-white hover:bg-blue-900 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

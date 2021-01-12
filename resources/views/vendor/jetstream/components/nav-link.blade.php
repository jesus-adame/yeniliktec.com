@props(['active'])

@php
$classes = ($active ?? false)
        ? 'inline-flex text-lg text-gray-800 items-center px-4 py-3 border-none border-indigo-400 text-sm font-bold leading-5 bg-white rounded-full focus:outline-none transition duration-150 ease-in-out'
        : 'inline-flex text-lg text-white items-center px-4 py-2 border-b-2 border-white text-sm font-bold leading-5 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

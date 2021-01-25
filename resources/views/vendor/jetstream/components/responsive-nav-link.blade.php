@props(['active'])

@php
$classes = ($active ?? false)
        ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-400 font-medium text-gray-900 bg-gray-50 focus:outline-none transition duration-150 ease-in-out'
        : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium hover:text-gray-700 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:bg-gray-500 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

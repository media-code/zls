@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 text-base font-medium leading-5  text-primary focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 text-base font-medium leading-5 hover:text-grey-700 hover:border-grey-300 focus:outline-none focus:text-grey-700 focus:border-grey-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

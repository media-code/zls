@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-3 text-4xl font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-3 text-4xl font-medium text-grey-600 hover:text-grey-800 hover:bg-grey-50 hover:border-grey-300 focus:outline-none focus:text-grey-800 focus:bg-grey-50 focus:border-grey-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if($active)
        <span class="mb-1 -ml-5 mr-2 inline-block rounded-full h-3 w-3 bg-white"></span>
    @endif
    {{ $slot }}
</a>

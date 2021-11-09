@props([
    'class' => false
])

@php

    $classes = 'text-white font-bold py-1 px-3 rounded text-xs cursor-pointer ';

    ($class) ? $classes .= $class : $classes .= 'bg-gray-500'

@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>

    {{ $slot }}

</a>


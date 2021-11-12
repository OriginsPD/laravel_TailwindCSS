@props([
    'active' => false,
])

@php

$classes = ($active ?? false)
            ? 'flex items-center py-2 px-8 hover:bg-gray-700 text-gray-100 cursor-pointer border-l-4 border-gray-100'
            : 'flex items-center py-2 px-8 hover:bg-gray-700 text-gray-100 cursor-pointer'

@endphp

<a {{ $attributes->merge([
    'class'=>$classes

    ]) }}>

    <span class="pr-4"> {{ $icon }}</span>

    {{ $slot }}

</a>

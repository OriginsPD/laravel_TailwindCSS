@props([
    'message' => false,
    'status' => false
])

@php

    $theme = ($status ?? false) ? 'bg-red-500' : 'bg-green-500'

@endphp

<div class="w-full text-white {{ $theme }}">

    <div class="container flex items-center justify-between px-6 py-4 mx-auto">

        <div class="flex">

            @if($status)

                <i class="fas fa-exclamation-triangle mt-0.5"></i>

            @else

                <i class="fas fa-shield-check mt-0.5"></i>

            @endif

            <p class="mx-3 my-auto">{{ $message }}</p>

        </div>

        {{ $slot }}

    </div>

</div>

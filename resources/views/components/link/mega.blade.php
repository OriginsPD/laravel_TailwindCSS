@props([
    'icon'
])

<a {{ $attributes->merge([
    'class'=>'flex flex row items-start rounded-lg cursor-pointer bg-transparent p-2 dark-mode:hover:bg-gray-600
              hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
              focus:shadow-outline']) }} >

    <div class="bg-teal-500 text-white rounded-lg p-3">

        {{ $icon }}

    </div>

    <div class="ml-3 flex inset-0">

        <p class="font-semibold capitalize italic text-xl mt-2 h-full my-auto">

            {{ $slot }}

        </p>

    </div>

</a>

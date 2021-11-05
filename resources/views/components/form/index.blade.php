@props([
    'title' => false,
    'grid' => 2
])

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">{{ $title }}</h2>

    <form {{ $attributes }}>

        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-{{ $grid }}">

            {{ $slot }}

        </div>

    </form>

</section>

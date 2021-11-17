<a {{ $attributes
        ->merge([
            'class' => 'block px-4 py-3 text-sm text-white capitalize transition-colors duration-200 transform
                        hover:bg-gray-50 hover:bg-opacity-20 dark:hover:bg-gray-700 dark:hover:text-white']) }}>

    {{ $slot }}

</a>

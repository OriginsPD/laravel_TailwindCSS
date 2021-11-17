@props([
    'center' => false,
    'end' => false,
    'drop' => false
])

<div x-data="{ open: false }"
     @click.away.window="open = false"
     {{ $attributes->merge(['class' => 'overflow-hidden']) }}>

    <div class="py-3 px-4 h-auto mx-auto max-w-screen-xl">

        <div class="flex items-center justify-between space-x-4 lg:space-x-10">

            <div class="flex lg:w-0 lg:flex-1">

                <span class="text-2xl text-white italic font-extrabold tracking-widest uppercase rounded-lg">

                    {{ config('app.name') }}

                </span>

            </div>


            <nav class="lg:flex text-sm font-medium space-x-8 hidden ">

                @if($center)

                    {{ $mid }}

                @endif

            </nav>

            <div class="items-center justify-end flex-1 hidden space-x-4 md:flex">

                @if($end)

                    {{ $end }}

                @endif

            </div>


            <div class="lg:hidden xl:hidden md:hidden">


                <button

                    @click="isSlide = !isSlide"
                    class="p-2 text-gray-600 hover:bg-white hover:bg-opacity-50 rounded-lg" type="button">

                    <span class="sr-only">Open menu</span>

                    <svg
                        aria-hidden="true"
                        class="w-5 h-5 text-white"
                        fill="none"
                        stroke="currentColor"
                        viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>


            </div>

        </div>

    </div>

</div>

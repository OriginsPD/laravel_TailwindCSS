@props([
'message' => 'Wecome Back'
])

<div x-data="{ Alert: false }" x-on:show-alert.window="Alert = true; setTimeout(() => { Alert = false },3000)"
    :class="Alert ? 'translate-y-0' : '-translate-y-full'"
    class=" fixed top-0 z-50 w-full bg-green-50 p-4 transform transition duration-300 ">
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Heroicon name: solid/check-circle -->
            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-green-800">
                {{ $message }}
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">

                <button @click="Alert = false" type="button"
                    class="inline-flex bg-green-50 rounded-md p-1.5 text-green-500 hover:bg-green-100 ">
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: solid/x -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>
        </div>
    </div>

</div>
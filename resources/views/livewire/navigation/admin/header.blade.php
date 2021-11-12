<div class="border-b z-30 border-gray-100 sticky
      top-0 shadow bg-gray-50">

    <div class="flex items-center justify-between h-16 px-4 mx-auto screen-2xl sm:px-6 lg:px-8">

        <div class="flex items-center justify-between space-x-4">

            <div class="mt-1">
                <button @click.prevent="isSlide = !isSlide" class="flex  flex-shrink-0">

                    <i class="fas fa-bars"></i>

                </button>
            </div>

            <div>

                    <span
                        class="text-2xl italic font-extrabold tracking-widest uppercase rounded-lg">

                        {{ config('app.name') }}

                    </span>

            </div>

            <nav @click.prevent="isSlide = false"
                class="items-end absolute  right-4 mr-6 justify-end pl-8 ml-8 text-sm font-medium border-l border-gray-100 space-x-2 md:flex">

                <div class="hidden lg:block">

                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg

                     hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 "

                       href="#">

                        <i class="fas fa-search pr-1"></i>

                        Search

                    </a>

                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg

                     hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 "

                       href="#">

                        Profile

                    </a>

                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg

                     hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 "

                       href="#">

                        Setting

                    </a>

                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg

                     hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 "

                       href="#">

                        Logout

                    </a>

                </div>

                <div class="sm:flex  md:flex lg:hidden">

                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 " href="#">Search</a>

                    <x-dropdown.dropNavi title="Links">

                        <x-link.mega>
                            <x-slot name="icon">

                                <i class="fad fa-chart-network text-lg"></i>

                            </x-slot>

                            {{ __('Dashboard') }}

                        </x-link.mega>


                    </x-dropdown.dropNavi>


                </div>

            </nav>

        </div>

    </div>

</div>


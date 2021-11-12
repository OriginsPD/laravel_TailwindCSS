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

            <nav
                class="items-end absolute  right-4 mr-6 justify-end pl-8 ml-8 text-sm font-medium border-l border-gray-100 space-x-2 md:flex">

                <div class="hidden lg:block">

                    <a href="" class="shadow-sm px-4 py-2 bg-white rounded-md border">Create</a>

                    <a href="" class="shadow-sm px-4 py-2 bg-white rounded-md border">Profile</a>

                    <a href="" class="shadow-sm px-4 py-2 bg-white rounded-md border">Settings</a>

                    <a href="" class="shadow-sm px-4 py-2 bg-white rounded-md border">Logout</a>

                </div>

                <div class="sm:block md:block lg:hidden">

                    <a href="" class="shadow-sm px-4 py-2 bg-white rounded-md border">Logout</a>

                </div>

            </nav>

        </div>

    </div>

</div>


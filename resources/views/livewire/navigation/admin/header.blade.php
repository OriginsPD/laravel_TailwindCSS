<div>

    <header class="border-b z-30 border-gray-100 sticky
      top-0 shadow bg-white">

        <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

            <div class="flex items-center justify-between space-x-4">

                <div class="mt-1">
                    <button @click.prevent="isSlide = !isSlide" class="flex  flex-shrink-0">

                        <i class="fas fa-bars"></i>

                    </button>
                </div>

                <div>

                    <a href="#"
                      class="text-2xl italic font-extrabold tracking-widest text-gray-900 uppercase rounded-lg
                             dark-mode:text-white focus:outline-none focus:shadow-outline">

                        {{ config('app.name') }}

                    </a>

                </div>

                <nav class="items-end absolute right-0 mr-6 justify-end pl-8 ml-8 text-sm font-medium border-l border-gray-100 space-x-2 md:flex">
                    <a href="" class="shadow-sm px-4 py-2 rounded-md border" >Create</a>
                    <a href="" class="shadow-sm px-4 py-2 rounded-md border" >Profile</a>
                    <a href="" class="shadow-sm px-4 py-2 rounded-md border" >Settings</a>
                    <a href="" class="shadow-sm px-4 py-2 rounded-md border" >Logout</a>
                </nav>

            </div>

        </div>

    </header>


</div>

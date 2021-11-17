<div class="h-auto">
    <div class="lg:flex my-24">
        <div class="flex items-center justify-center w-full px-6 py-8 lg:h-128 lg:w-1/2">
            <div class="max-w-xl">
                <h2 class="text-4xl font-extrabold italic text-white lg:text-6xl">

                    Build Your New

                        Idea Here



                </h2>

                <p class="mt-2 text-sm text-white dark:text-gray-400 lg:text-base">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id
                    necessitatibus odio quam quasi, quibusdam rem tempora voluptates.</p>

                <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">

                    <a href=""
                       class="relative inline-block px-12 py-3 mt-8 text-center overflow-hidden border-2 border-white hover:bg-white transition-colors group">
                        <span
                            class="absolute inset-0 transition transform origin-left bg-white transform scale-x-0 bg-blue-500 group-hover:scale-x-100"></span>

                        <span class="relative text-white group-hover:text-black text-sm font-medium tracking-widest uppercase">

                            Take a look

                        </span>
                    </a>

                </div>
            </div>
        </div>

        <div class="w-full p-4 xs:hidden hidden md:block lg:block h-64 lg:w-1/2 lg:h-auto">

            <x-form grid="1">

                <x-slot name="title">

                    <h1 class="text-2xl font-semibold w-full text-center text-blue-700">

                        Login

                    </h1>

                </x-slot>

                <x-input.label label="Email">

                    <x-input.text type="email"
                                  :error="$errors->first('user.email')"/>

                </x-input.label>

                <x-input.label label="Password">

                    <x-input.text type="password"
                                  :error="$errors->first('user.password')"/>

                </x-input.label>

                <x-input.submit class="bg-blue-600 font-semibold">

                    Login

                </x-input.submit>

            </x-form>


        </div>

    </div>


</div>


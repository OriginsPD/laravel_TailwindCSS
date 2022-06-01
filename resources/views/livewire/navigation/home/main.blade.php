<div>

    <div x-data="{ notify:@entangle('notify') }">

        <x-alerts.notify />

        <x-alerts.failed />


        <div x-data="{ login:@entangle('control.login') ,
                       register:@entangle('control.register'),
                        profile:@entangle('control.profile')}">


            <div class="bg-purple-600 text-sm text-white font-light p-2">
                <div class="flex justify-end pr-5 space-x-1">
                    <x-icon.twitter href="#" class="h-5 text-white" />
                    <x-icon.facebook href="#" class="h-5 text-white" />
                    <span>|</span>

                    <a href="{{ route('contact-us') }}" class="flex space-x-1">
                        <div href="#" class="pl-2 font-semibold"> Contact Us </div>
                        <x-icon.phone class="h-5 text-white" />
                    </a>

                </div>
            </div>

            <div class="flex items-center justify-between text-white bg-purple-700 h-auto p-3 ">

                <div class="text-xl font-semibold uppercase italic">

                    <a href="{{ route('index') }}"> {{ config('app.name','Halftime Car Rental') }} </a>

                </div>

                <div class="space-x-5  items-center text-sm flex ">

                    <a href="{{ route('services') }}" class="hover:underline">Cars & Services</a>
                    <a href="#" class="hover:underline">Rental Polices</a>
                    <a href="{{ route('about-Us') }}" class="hover:underline pr-5">About Us</a>

                    @guest

                    <a href="#" wire:click.prevent="$toggle('control.login')"
                        class="border border-white rounded px-5 py-1.5"> Login </a>

                    <a href="#" wire:click.prevent="$toggle('control.register')"
                        class=" bg-white text-purple-700 rounded px-4 py-1.5"> Register </a>

                    @else

                    <div @mouseleave="profile = false"
                        class="flex inline-block px-4 cursor-pointer">


                        <span @click="profile = !profile"> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                        </span>
                        <x-icon.arrow class="text-sm" />



                        <div x-show="profile"
                            class="absolute right-4 z-50 w-40 py-2 mt-7 bg-opacity-50 bg-cool-gray-200 shadow-xl dark:bg-gray-800">

                            <a href="#"
                                class="block flex space-x-2 px-4 py-3 text-sm text-cool-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-purple-700">

                                <x-icon.dashboard /> <span> Rental History </span>

                            </a>

                            <a href="#" wire:click.prevent="logout"
                                class="block flex space-x-2 px-4 py-3 text-xs text-cool-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-purple-700">

                                <x-icon.logout class="text-xs" /> <span> Logout </span>

                            </a>

                        </div>

                    </div>

                    @endguest


                </div>

                <x-modal alpName="login" class="flex bg-black bg-opacity-70 p-5">

                    <livewire:auth.login />

                </x-modal>

                <x-modal alpName="register" class="flex bg-black bg-opacity-70 p-5">

                    <livewire:auth.register />

                </x-modal>

            </div>


        </div>
    </div>

</div>
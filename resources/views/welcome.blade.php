<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">

</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">

 <div class="border-b z-30 border-gray-100 sticky
      top-0 shadow bg-gray-50">

        <div class="flex items-center justify-between h-16 px-4 mx-auto screen-2xl sm:px-6 lg:px-8">

            <div class="flex items-center justify-between space-x-4">


                <div>

                    <span
                        class="text-2xl italic font-extrabold tracking-widest uppercase rounded-lg">

                        {{ config('app.name') }}

                    </span>

                </div>

                <nav
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



</body>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</html>

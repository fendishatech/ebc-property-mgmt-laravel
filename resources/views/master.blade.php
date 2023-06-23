<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header -->
    <nav class="h-[100px] shadow-lg px-6 py-2 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <img class="w-[80px] h-[80px]" src="{{ url('/images/ebc-logo.png') }}" alt="Ebc logo" />
            <div class="hidden md:flex flex-col items-center">
                <p class="text-2xl text-red-600 font-semibold">
                    የኢትዮጵያ ብሮድካስቲንግ ኮርፖሬሽን
                </p>
                <p class="text-xl text-grey-900">
                    Property Management System
                </p>
            </div>
        </div>
        <!-- Links and profile settings -->
        <div class="flex items-center justify-center gap-4">
            <!-- Links -->
            <ul class="flex items-center text-[18px] font-bold">
                <li class="px-2 md:px-6 active text-red-700 py-2 hover:bg-red-600 hover:text-white rounded">
                    <a href="/home">Home</a>
                </li>
                <li class="px-2 md:px-6 py-2 text-red-700 hover:bg-red-600 hover:text-white rounded">
                    <a href="/items_store">Store</a>
                </li>
            </ul>
            <!-- Profile Settings -->
            <div class="flex items-center gap-2 cursor-pointer">
                <p class="hidden md:block">
                    Welcome,
                    @if (Session::has('user'))
                        {{ Session::get('user')['first_name'] }}
                    @else
                        No user
                    @endif
                </p>

                <div class="relative inline-block text-left">
                    <div>
                        <button type="button"
                            class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <!-- Setting Icon -->
                            <svg fill="rgb(220,38,38)" class="w-[24px] h-[24px]" viewBox="0 0 16 16" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M16 9v-2l-1.7-0.6c-0.2-0.6-0.4-1.2-0.7-1.8l0.8-1.6-1.4-1.4-1.6 0.8c-0.5-0.3-1.1-0.6-1.8-0.7l-0.6-1.7h-2l-0.6 1.7c-0.6 0.2-1.2 0.4-1.7 0.7l-1.6-0.8-1.5 1.5 0.8 1.6c-0.3 0.5-0.5 1.1-0.7 1.7l-1.7 0.6v2l1.7 0.6c0.2 0.6 0.4 1.2 0.7 1.8l-0.8 1.6 1.4 1.4 1.6-0.8c0.5 0.3 1.1 0.6 1.8 0.7l0.6 1.7h2l0.6-1.7c0.6-0.2 1.2-0.4 1.8-0.7l1.6 0.8 1.4-1.4-0.8-1.6c0.3-0.5 0.6-1.1 0.7-1.8l1.7-0.6zM8 12c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z">
                                </path>
                                <path
                                    d="M10.6 7.9c0 1.381-1.119 2.5-2.5 2.5s-2.5-1.119-2.5-2.5c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5z">
                                </path>
                            </svg>
                            Options
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div id="dropdown-menu"
                        class="hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 px-2" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="/profile_setting"
                                class="my-2 text-gray-700 block px-4 py-2 text-sm rounded hover:bg-red-600 hover:text-white"
                                role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                            <a href="/logout"
                                class="my-2 text-gray-700 block px-4 py-2 text-sm rounded hover:bg-red-600 hover:text-white"
                                role="menuitem" tabindex="-1" id="menu-item-0">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer class="py-6 flex items-center justify-center gap-6 bg-red-100">
        <!-- Logo -->
        <div class="flex items-center pr-4 border-r-2 border-red-600">
            <img class="w-[80px] h-[80px]" src="{{ url('/images/ebc-logo.png') }}" alt="Ebc logo" />
            <div class="hidden md:flex flex-col items-center">
                <p class="text-2xl text-red-600 font-semibold">
                    የኢትዮጵያ ብሮድካስቲንግ ኮርፖሬሽን
                </p>
                <p class="text-xl text-grey-900">
                    Property Management System
                </p>
            </div>
        </div>
        <div class="flex items-center">
            <p>All rights reserved</p>
        </div>
    </footer>

    <script src="/script.js"></script>
</body>

</html>

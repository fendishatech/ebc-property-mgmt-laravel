<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header -->
    <nav class="h-[100px] shadow-lg px-6 py-2 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <img class="w-[80px] h-[80px]" src="{{ url('/images/ebc-logo.png') }}" alt="Ebc logo" />
            <div class="flex flex-col items-center">
                <p class="text-2xl text-red-600 font-semibold">
                    የኢትዮጵያ ብሮድካስቲንግ ኮርፖሬሽን
                </p>
                <p class="text-xl text-grey-900">Property Management System</p>
            </div>
        </div>
        <!-- Links and profile settings -->
        <div class="flex items-center justify-center gap-4">
            <!-- Links -->
            <ul class="flex items-center text-[18px] font-bold">
                <li class="px-6 active py-2 hover:bg-red-600 hover:text-white rounded">
                    <a href="/">Home</a>
                </li>
                <li class="px-6 py-2 hover:bg-red-600 hover:text-white rounded">
                    <a href="/store">Store</a>
                </li>
            </ul>
            <!-- Profile Settings -->
            <div class="flex items-center gap-2 cursor-pointer">
                <p>Welcome, Username</p>
                <div class="flex items-baseline">
                    <!-- Setting Icon -->
                    <svg fill="rgb(220,38,38)" class="w-[35px] h-[35px]" viewBox="0 0 16 16" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M16 9v-2l-1.7-0.6c-0.2-0.6-0.4-1.2-0.7-1.8l0.8-1.6-1.4-1.4-1.6 0.8c-0.5-0.3-1.1-0.6-1.8-0.7l-0.6-1.7h-2l-0.6 1.7c-0.6 0.2-1.2 0.4-1.7 0.7l-1.6-0.8-1.5 1.5 0.8 1.6c-0.3 0.5-0.5 1.1-0.7 1.7l-1.7 0.6v2l1.7 0.6c0.2 0.6 0.4 1.2 0.7 1.8l-0.8 1.6 1.4 1.4 1.6-0.8c0.5 0.3 1.1 0.6 1.8 0.7l0.6 1.7h2l0.6-1.7c0.6-0.2 1.2-0.4 1.8-0.7l1.6 0.8 1.4-1.4-0.8-1.6c0.3-0.5 0.6-1.1 0.7-1.8l1.7-0.6zM8 12c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z">
                        </path>
                        <path
                            d="M10.6 7.9c0 1.381-1.119 2.5-2.5 2.5s-2.5-1.119-2.5-2.5c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5z">
                        </path>
                    </svg>
                    <!-- Arrow Icon -->
                    <svg fill="rgb(220,38,38)" xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px]"
                        viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                        <path
                            d="M8.3,14h35.4c1,0,1.7,1.3,0.9,2.2L27.3,37.4c-0.6,0.8-1.9,0.8-2.5,0L7.3,16.2C6.6,15.3,7.2,14,8.3,14z" />
                    </svg>
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
            <div class="flex flex-col items-center">
                <p class="text-2xl text-red-600 font-semibold">
                    የኢትዮጵያ ብሮድካስቲንግ ኮርፖሬሽን
                </p>
                <p class="text-xl text-grey-900">Property Management System</p>
            </div>
        </div>
        <div class="flex items-center">
            <p>All rights reserved</p>
        </div>
    </footer>
</body>

</html>

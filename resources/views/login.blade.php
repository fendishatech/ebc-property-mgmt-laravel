<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBC Property Management | Login</title>
    @vite('resources/css/app.css')
</head>


<body>
    <div class="w-full h-screen flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 rounded-lg bg-white" action="/login" method="POST">
            @csrf
            <div class="flex font-bold flex-col items-center justify-center mt-6">
                <img class="h-28 w-28 mb-3" src="/images/ebc-logo.png" />
                <p class="text-xl text-red-600 font-semibold">
                    የኢትዮጵያ ብሮድካስቲንግ ኮርፖሬሽን
                </p>
            </div>
            <h2 class="text-2xl text-center text-gray-400 mb-8">
                Property Management System
            </h2>
            @if ($errors->has('custom_error'))
                <p class="py-2 text-sm text-red-400 text-center">
                    {{ $errors->first('custom_error') }}
                </p>
            @endif
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="text" name="username" placeholder="Username"
                            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                            value="{{ old('username') }}" />
                    </div>
                    @if ($errors->has('username'))
                        <span class="text-sm text-red-400">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="password" placeholder="Password"
                            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />

                    </div>
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit"
                    class="w-full py-2 mt-8 rounded-full bg-red-600 text-gray-100 focus:outline-none">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>

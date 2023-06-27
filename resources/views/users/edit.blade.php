@extends('master')
@section('content')
    <div class="w-full flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 my-8 rounded-lg bg-white" action="{{ url('/users/' . $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <h2 class="mt-6 text-2xl text-center text-gray-400 mb-8">
                Edit User
            </h2>
            <div class="px-12 pb-10">
                {{-- first_name --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="store_name">
                        First Name
                    </label>
                    <div class="relative">
                        <input class="w-full px-4 py-2 pr-8 rounded shadow border border-gray-400" type="text"
                            name="first_name" min="1" value="{{ $user->first_name }}">
                        @if ($errors->has('first_name'))
                            <span class="text-sm text-red-400">{{ $errors->first('first_name') }}</span>
                        @endif
                    </div>
                </div>
                {{-- last_name --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="store_name">
                        Last Name
                    </label>
                    <div class="relative">
                        <input class="w-full px-4 py-2 pr-8 rounded shadow border border-gray-400" type="text"
                            name="last_name" min="1" value="{{ $user->last_name }}">
                        @if ($errors->has('last_name'))
                            <span class="text-sm text-red-400">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                </div>
                {{-- username --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="store_name">
                        Username
                    </label>
                    <div class="relative">
                        <input class="w-full px-4 py-2 pr-8 rounded shadow border border-gray-400" type="text"
                            name="username" min="1" value="{{ $user->username }}">
                        @if ($errors->has('username'))
                            <span class="text-sm text-red-400">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                </div>

                {{-- User role --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="item_id">
                        User Role
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="user_id" name="user_role">
                            <option value="user" {{ $user->user_role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->user_role == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9 11l3-3 3 3m0 6l-3-3-3 3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full py-2 mt-8 rounded-full bg-red-600 text-gray-100 focus:outline-none">
                    Edit Item
                </button>
            </div>
        </form>
    </div>
@endsection

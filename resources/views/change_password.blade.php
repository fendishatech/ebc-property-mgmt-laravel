@extends('master')
@section('content')
    <div class="py-10 w-full flex items-center justify-center bg-slate-100">
        <form class="p-4 w-full md:w-1/3 rounded-lg bg-white" action="{{ url('/profile_setting') }}" method="POST">
            @csrf
            @if ($errors->has('custom_error'))
                <p class="py-2 text-sm text-red-400 text-center">
                    {{ $errors->first('custom_error') }}
                </p>
            @endif
            <div class="px-12 pb-8">

                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="password" placeholder="Previous password"
                            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-400">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="new_password" placeholder="New Password"
                            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                    @foreach ($errors->get('new_password') as $message)
                        <span class="text-sm text-red-400">{{ $message }}</span>
                    @endforeach
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="confirm_password" placeholder="Confirm Password"
                            class="w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" />
                    </div>
                    @if ($errors->has('confirm_password'))
                        <span class="text-sm text-red-400">{{ $errors->first('confirm_password') }}</span>
                    @endif
                </div>
                <button type="submit" class="w-full py-2 mt-6 rounded-full bg-red-600 text-gray-100 focus:outline-none">
                    Change Password
                </button>
            </div>
        </form>
    </div>
@endsection

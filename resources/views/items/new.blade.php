@extends('master')
@section('content')
    <div class="w-full flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 my-8 rounded-lg bg-white" action="{{ url('/items') }}" method="POST">
            @csrf
            <h2 class="mt-6 text-2xl text-center text-gray-400 mb-8">
                Add new Item to store
            </h2>
            <div class="px-12 pb-10">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="item_id">
                        Item
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="item_id" name="categoryId">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9 11l3-3 3 3m0 6l-3-3-3 3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="store_name">
                        Item Name
                    </label>
                    <div class="relative">
                        <input class="w-full px-4 py-2 pr-8 rounded shadow border border-gray-400" type="text"
                            name="item_name" min="1" value="{{ old('item_name') }}">
                    </div>
                    @if ($errors->has('item_name'))
                        <span class="text-sm text-red-400">{{ $errors->first('item_name') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="store_name">
                        Partnumber
                    </label>
                    <div class="relative">
                        <input class="w-full px-4 py-2 pr-8 rounded shadow border border-gray-400" type="text"
                            name="partnumber" min="1" value="{{ old('partnumber') }}">
                        @if ($errors->has('partnumber'))
                            <span class="text-sm text-red-400">{{ $errors->first('partnumber') }}</span>
                        @endif
                    </div>
                </div>

                <button type="submit" class="w-full py-2 mt-8 rounded-full bg-red-600 text-gray-100 focus:outline-none">
                    Add Item
                </button>
            </div>
        </form>
    </div>
@endsection

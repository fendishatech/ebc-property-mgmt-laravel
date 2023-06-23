@extends('master')
@section('content')
    <div class="w-full flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 my-8 rounded-lg bg-white" action="{{ url('/items_store') }}" method="POST">
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
                            id="item_id" name="itemId">
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->item_name }}</option>
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
                        Store Name
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="store_name" name="store_name">
                            @foreach ($storeNames as $storeName)
                                <option value="{{ $storeName }}">{{ $storeName }}</option>
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
                        Quantity
                    </label>
                    <div class="relative">
                        <input class="w-full px-4 py-2 pr-8 rounded shadow border border-gray-400" type="number"
                            name="quantity" min="1">
                    </div>
                </div>

                <h1 class="block text-gray-700 font-bold mb-2" for="store_name">
                    Location
                </h1>
                <div class="grid grid-cols-4 gap-4">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="shelf">
                            Shelf
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="shelf" name="shelf" type="number" min="1" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="box">
                            Box
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="box" name="box" type="number" min="1" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="row">
                            Row
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="row" name="row" type="number" min="1" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="cell">
                            Cell
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="cell" name="cell" type="number" min="1" required>
                    </div>
                </div>

                <button type="submit" class="w-full py-2 mt-8 rounded-full bg-red-600 text-gray-100 focus:outline-none">
                    Add Item
                </button>
            </div>
        </form>
    </div>
@endsection

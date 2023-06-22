@extends('master')
@section('content')
    <!-- container -->
    <div class="px-6 pt-4">
        <!-- Top Section -->
        <section class="flex">
            <!-- Tables -->
            <div class="flex-1 py-10">
                <h1 class="mb-4 text-start py-2 text-red-500 font-bold text-4xl border-b-2 border-red-600">Items</h1>
                <!-- Users table -->
                @include('dashboard.partials.items-table')
                <br />
                <h1 class="mb-4 text-start py-2 text-red-500 font-bold text-4xl border-b-2 border-red-600">Store</h1>
                <!-- Store table -->
                @include('dashboard.partials.store-table')
                <br />
                <h1 class="mb-4 text-start py-2 text-red-500 font-bold text-4xl border-b-2 border-red-600">Users</h1>
                <!-- Users table -->
                @include('dashboard.partials.users-table')
                <br />
            </div>
            <div class="flex-1">
                <!-- Calendar -->
                @include('dashboard.partials.calendar')
            </div>
        </section>
    </div>
@endsection

<div class="flex flex-col overflow-auto">

    <div class=" overflow-x-auto border-b border-gray-200 shadow">
        <table class="table-auto divide-y divide-gray-300">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500">ID</th>
                    <th class="px-6 py-2 text-xs text-gray-500">Store Name</th>
                    <th class="px-6 py-2 text-xs text-gray-500">Quantity</th>
                    <th class="px-6 py-2 text-xs text-gray-500">Location</th>
                    <th class="px-6 py-2 text-xs text-gray-500">Edit</th>
                    @if (Session::has('user') && Session::get('user')['user_role'] == 'admin')
                        <th class="px-6 py-2 text-xs text-gray-500">Delete</th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                @foreach ($storeItems as $item)
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $item->store_name }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-500">
                                {{ $item->quantity }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $item->location }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ url('/items_store/' . $item->id . '/edit') }}"
                                class="px-4 py-1 text-sm text-indigo-600 bg-indigo-200 rounded-full">Edit</a>
                        </td>
                        @if (Session::has('user') && Session::get('user')['user_role'] == 'admin')
                            <td class="px-6 py-4">
                                <form action="{{ url('/items_store/' . $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full"
                                        onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm("Are you sure you want to delete this record?")) {
            // Submit the form to delete the record
        }
    }
</script>

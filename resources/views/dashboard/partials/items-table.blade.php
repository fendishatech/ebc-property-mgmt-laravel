<div class="flex flex-col">
    <div class="w-full">
        <div class="overflow-x-auto border-b border-gray-200 shadow">
            <table class="divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">ID</th>
                        <th class="px-6 py-2 text-xs text-gray-500">Item Name</th>
                        <th class="px-6 py-2 text-xs text-gray-500">Partnumber</th>
                        <th class="px-6 py-2 text-xs text-gray-500">category Id</th>
                        <th class="px-6 py-2 text-xs text-gray-500">Edit</th>
                        <th class="px-6 py-2 text-xs text-gray-500">Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                    @foreach ($items as $item)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $item->item_name }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">
                                    {{ $item->partnumber }}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $item->categoryId }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="px-4 py-1 text-sm text-indigo-600 bg-indigo-200 rounded-full">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

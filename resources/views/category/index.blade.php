<x-dashboard>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            <div class="m-5">
                <div class="m-4">
                    <a href="{{ route('category.create') }}"
                        class=" bg-blue-600 rounded-md py-2 px-4 hover hover:bg-blue-400">Add
                        new
                        category</a>
                </div>
                <table class="">
                    <thead class="border-b border-gray-800">
                        <th>Категория</th>
                        <th>Субкатегория</th>
                        <th>Фото</th>
                        <th>Действия</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="">
                                @if ($category->isMain)
                                    <td class="border border-gray-400">{{ $category->title }}</td>
                                @else
                                    @if ($category->parent)
                                        <td class="border border-gray-400">{{ $category->parent->title }}</td>
                                    @else
                                        <td class="border border-gray-400">
                                            <div class="flex justify-center">
                                                <span>-</span>
                                            </div>
                                        </td>
                                    @endif
                                @endif

                                @if ($category->isMain)
                                    <td class="border border-gray-400">
                                        <div class="flex justify-center">
                                            <span>-</span>
                                        </div>
                                    </td>
                                @else
                                    <td class="border border-gray-400">{{ $category->title }}</td>
                                @endif

                                <td class="border border-gray-400">
                                    @if ($category->picture_url)
                                        <img src="{{ asset('/storage/' . $category->picture_url) }}" alt="Фото"
                                            class=" w-24 h-24 object-scale-down">
                                    @endif
                                </td>

                                <td class="border border-gray-400">
                                    <form action="{{ route('category.destroy', $category->id) }}" method="Post"
                                        class="flex">
                                        <div
                                            class="border  bg-green-600  hover:bg-green-400  rounded-md m-2 flex justify-center">
                                            <a class=" py-2 px-4"
                                                href="{{ route('category.edit', $category->id) }}">Edit</a>
                                        </div>
                                        @csrf
                                        @method('DELETE')
                                        <div class="border  bg-red-600 hover:bg-green-400 rounded-md m-2"><button
                                                type="submit" class="py-2 px-4">Delete</button></div>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-dashboard>

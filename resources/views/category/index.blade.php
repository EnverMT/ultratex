<x-dashboard>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">

                    <div class="border border-gray-600 rounded-md inline-block m-4 hover:bg-blue-800 bg-blue-600">
                        <a class=" py-2 px-4" href={{ route('category.create') }}>Add new category</a>
                    </div>
                    <table class="min-w-full ">
                        <thead class="bg-white border-b">
                            
                            <tr class=" bg-slate-300 dark:bg-slate-800 font-bold text-lg ">
                                <th scope="col" class=" px-6 py-4 text-left">Категория</th>
                                <th scope="col" class=" px-6 py-4 text-left">Субкатегория</th>
                                <th scope="col" class=" px-6 py-4 text-left">Фото</th>
                                <th scope="col" class=" px-6 py-4 text-left">Действия</th>
                            </tr>

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
    </div>

</x-dashboard>

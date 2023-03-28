<x-app-layout>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            @include('components.dashboard.navigation')

            <div class="m-5">
                <div class="m-4">
                    <a href="{{ route('category.create') }}"
                        class=" bg-blue-600 rounded-md py-2 px-4 hover hover:bg-blue-400">Add
                        new
                        category</a>
                </div>
                <table class="">
                    <thead class="border-b border-gray-800">
                        <th>id</th>
                        <th>title</th>
                        <th>isMain?</th>
                        <th width="280px">Action</th>

                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class=" border-b border-gray-800">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->isMain }}</td>
                                <td>
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

</x-app-layout>

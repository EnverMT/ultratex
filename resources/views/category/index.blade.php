<x-app-layout>
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex ">
            @include('components.dashboard.navigation')

            <div class="m-5">
                <div class="m-4">
                    <a href="{{ route('category.create') }}" class=" bg-blue-600 rounded-md py-2 px-4">Add
                        new
                        category</a></div>
                <table class="">
                    <thead class="border-b border-gray-800">
                        <th>id</th>
                        <th>title</th>
                        <th>isMain?</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class=" border-b border-gray-800">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->isMain }}</td>
                                <td><button class=" bg-green-600 rounded-md py-2 px-4">Edit</button></td>
                                <td><button class=" bg-red-600 rounded-md py-2 px-4">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>

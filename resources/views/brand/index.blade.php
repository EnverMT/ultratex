<x-dashboard>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="border border-gray-600 rounded-md inline-block m-4 hover:bg-green-300 bg-green-600">
                        <a class=" py-2 px-4" href="">Add new Brand</a>
                    </div>
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr class=" bg-blue-300 font-bold text-lg">
                                <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                    id
                                </th>
                                <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                    Sub-Category
                                </th>
                                <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                    Brand
                                </th>
                                <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                    Products
                                </th>
                                <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr class="bg-gray-100 border-b">
                                    <td class="px-6 py-4 whitespace-nowrap  font-medium text-gray-900">
                                        {{ $brand->id }}
                                    </td>
                                    <td class="text-gray-900  px-6 py-4 whitespace-nowrap">
                                        {{ $brand->category->title }}
                                    </td>
                                    <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">
                                        {{ $brand->title }}
                                    </td>
                                    <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">
                                        @foreach ($brand->products as $product)
                                            <span>{{ $product->title }}</span>
                                        @endforeach
                                    </td>
                                    <td class=" text-gray-900  px-6 py-4 whitespace-nowrap flex">
                                        <div class="border bg-green-600 hover:bg-green-300 rounded-md"><a
                                                class="py-2 px-4" href="">Edit</a></div>
                                        <div class="border bg-red-600 hover:bg-red-300 rounded-md"><a class="py-2 px-4"
                                                href="">Remove</a></div>
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

<x-dashboard>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="border border-gray-600 rounded-md inline-block m-4 hover:bg-blue-800 bg-blue-600">
                        <a class=" py-2 px-4" href={{ route('product.create') }}>Add new Product</a>
                    </div>
                    <table class="min-w-full ">
                        <thead class="bg-white border-b">
                            <tr class=" bg-slate-300 dark:bg-slate-800 font-bold text-lg ">
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Category
                                </th>
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Sub-category
                                </th>
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Model
                                </th>
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Kod
                                </th>
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Title
                                </th>
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Pictures
                                </th>
                                <th scope="col" class=" px-6 py-4 text-left">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="bg-gray-100 border-b dark:bg-slate-600">
                                    <td class="px-6 py-4 whitespace-nowrap  font-medium ">
                                        {{ $product->brand->category->title }}
                                    </td>
                                    <td class="  px-6 py-4 whitespace-nowrap">
                                        {{ $product->brand->title }}
                                    </td>
                                    <td class="   px-6 py-4 whitespace-nowrap">
                                        {{ $product->model }}
                                    </td>
                                    <td class="   px-6 py-4 whitespace-nowrap">
                                        {{ $product->kod }}
                                    </td>
                                    <td class="   px-6 py-4 whitespace-nowrap">
                                        {{ $product->title }}
                                    </td>
                                    <td class="   px-6 py-4 whitespace-nowrap">
                                        <div class="flex flex-wrap">
                                            @foreach ($product->pictures as $pic)
                                                <img src="{{ asset('/storage/' . $pic->url) }}" alt="Фото">
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="  whitespace-nowrap flex">
                                        <form action="{{ route('product.destroy', $product->id) }}" method="Post"
                                            class="flex">
                                            <div
                                                class="border  bg-green-600  hover:bg-green-400  rounded-md m-2 flex justify-center">
                                                <a class=" py-2 px-4"
                                                    href="{{ route('product.edit', $product->id) }}">Edit</a>
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

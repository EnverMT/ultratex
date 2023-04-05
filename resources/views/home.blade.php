<x-app-layout>
    <div class="mx-auto max-w-screen-xl">
        <div class="lg:flex">
            {{-- Categories --}}
            <div class="flex flex-col">
                <div class="flex flex-col p-2 font-semibold">
                    @foreach ($categories as $category)
                        @if ($category->isMain)
                            <a href={{ route('home', ['category_id' => $category->id]) }}
                                class=" dark:text-white hover:underline">{{ $category->title }}</a>
                            @if (Request::get('category_id'))
                                <div class="flex flex-col">

                                    @foreach ($categories as $subCategory)
                                        @if (
                                            !$subCategory->isMain &&
                                                $subCategory->parent->id == Request::get('category_id') &&
                                                $subCategory->parent->id == $category->id)
                                            <a href={{ route('home', ['category_id' => Request::get('category_id'), 'sub_category_id' => $subCategory->id]) }}
                                                class=" dark:text-white hover:underline pl-4">{{ $subCategory->title }}</a>
                                        @endif
                                    @endforeach

                                </div>
                            @endif
                        @endif
                    @endforeach

                </div>




            </div>

            <div class="flex flex-col">

                {{-- Filters --}}
                {{-- <div class="flex m-5 dark:text-white">
                    <label for="sortby">
                        Sort by:
                        <select name="sortby" id="" class="dark:bg-slate-600">
                            <option value="popular">Newest</option>
                            <option value="expansive">Expensive first</option>
                            <option value="cheapest">Cheapest first</option>
                        </select>
                    </label>

                    <label for="perPage" class="ml-5">
                        Show:
                        <select name="perPage" id="perPage" class="dark:bg-slate-600">
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                        </select>
                    </label>
                </div> --}}

                {{-- Products --}}
                {{-- <div class="dark:text-white grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"> --}}
                <div class="dark:text-white flex flex-wrap">
                    @foreach ($products as $product)
                        <a href="{{ route('product.show', $product->id) }}">
                            <div class="flex flex-col max-w-sm mx-auto">
                                <div class="m-3 p-2 border border-gray-200 dark:border-gray-500 relative">
                                    <div class="absolute top-0 right-0 my-5 bg-red-400 px-3 mr-4 rounded-md">
                                        <span> new </span>
                                    </div>
                                    @foreach ($product->pictures as $pic)
                                        <img src="{{ asset('/storage/' . $pic->url) }}"
                                            class="w-48 h-48 object-scale-down" alt="Фото">
                                    @endforeach
                                    <div class="flex flex-col items-center">
                                        <span
                                            class="uppercase text-gray-400 text-sm">{{ $product->brand->title }}</span>
                                        <span class="uppercase font-semibold">{{ $product->title }}</span>
                                        <span class="font-semibold ">
                                            <span
                                                class="dark:text-red-400 text-red-500">{{ number_format($product->price, 0, ',', ' ') }}</span>
                                            <span>сум</span>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class=" mx-auto my-5">
                    {{ $products->links() }}
                </div>

            </div>
        </div>

    </div>

</x-app-layout>

<x-app-layout>
    <div class="">
        <div class=" mx-auto max-w-screen-2xl lg:flex">
            {{-- Categories --}}
            <div class="flex flex-col">
                <div class="flex flex-col">
                    <h3 class="mb-4 mt-6 font-semibold text-gray-900 dark:text-white m-3">Категории:</h3>
                    <ul class="w-48 text-sm font-medium text-gray-900  dark:text-white">
                        @foreach ($categories as $category)
                            <li class="w-full">
                                <div class="flex items-center pl-3">
                                    <input id="category-{{ $category->id }}" name="category" type="checkbox"
                                        value="{{ $category->id }}"
                                        class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="category-{{ $category->id }}"
                                        class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $category->title }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="flex flex-col">
                {{-- Filters --}}
                <div class="flex m-5 dark:text-white">
                    <label for="sortby">
                        Sort by:
                        <select name="sortby" id="" class="dark:bg-slate-600">
                            <option value="popular">Newest</option>
                            <option value="popular">Expensive first</option>
                            <option value="popular">Cheapest first</option>
                        </select>
                    </label>

                    <label for="showedItems" class="ml-5">
                        Show:
                        <select name="showedItems" id="showedItems" class="dark:bg-slate-600">
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                        </select>
                    </label>


                </div>


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
                                    <img src="{{ asset('assets/img/product01.png') }}" alt="">
                                    <div class="flex flex-col items-center">
                                        <span
                                            class="uppercase text-gray-400 text-sm">{{ $product->brand->title }}</span>
                                        <span class="uppercase font-semibold">{{ $product->title }}</span>
                                        <span class="font-semibold dark:text-red-400 text-red-500">{{ $product->price }}
                                            сум</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>



                <div class=" mx-auto my-5">
                    <ul class="inline-flex -space-x-px">
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

    </div>

</x-app-layout>

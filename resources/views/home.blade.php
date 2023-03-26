<x-app-layout>
    <div class="flex">
        {{-- Categories --}}
        <div class="flex basis-1/4 flex-col">
            <div>
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Technology</h3>
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

            {{-- <div>
                <input type="range" name="" id=""
                    class="w-full h-2 rounded-lg appearance-none cursor-pointer dark:bg-gray-200 bg-gray-600">
            </div> --}}

        </div>



        {{-- Products --}}
        <div class="flex-col basis-3/4">
            <div class="m-5 dark:text-white">
                <label for="sortby">
                    Sort by:
                    <select name="sortby" id="" class="dark:bg-slate-600">
                        <option value="popular">Popular</option>
                        <option value="popular">By cost desc</option>
                        <option value="popular">By cost asc</option>
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

            <div class="flex flex-wrap dark:text-white">
                @foreach ($products as $product)
                    <div class="flex flex-col basis-1/3">
                        <div class="m-3 p-2 border border-gray-200 dark:border-gray-500 relative">
                            <div class="absolute top-0 right-0 my-5 bg-red-400 px-3 mr-4 rounded-md">
                                <span> new </span>
                            </div>
                            <img src="{{ asset('assets/img/product01.png') }}" alt="">
                            <div class="flex flex-col items-center">
                                <span class="uppercase text-gray-400 text-sm">{{ $product->category->title }}</span>
                                <span class="uppercase font-semibold">{{ $product->title }}</span>
                                <span class="font-semibold">{{ $product->price }} сум</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

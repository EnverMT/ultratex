<div>
    {{-- Category menu --}}
    <div class="flex justify-between items-center">
        <div class="bg-white flex">
            <div class="flex items-center justify-end">
                @foreach ($categories as $cat)
                    <div class="flex flex-col relative text-left dropdown">
                        <span class="rounded-md shadow-sm p-1">
                            <button
                                class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700
                                transition duration-150 ease-in-out  border border-gray-300
                                rounded-md hover:text-white

                                bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500

                                "
                                type="button" aria-haspopup="true" aria-expanded="true"
                                aria-controls="headlessui-menu-items-117"
                                wire:click="selectCategory({{ $cat->id }})">
                                <span>{{ $cat->title }}</span>
                            </button>
                        </span>

                        <div
                            class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                            <div class="absolute mx-1 left-0 origin-top-right ">
                                @foreach ($cat->children as $scat)
                                    <div>
                                        <button wire:click="selectSubCategory({{ $scat->id }})"
                                            class=" transition-all duration-200 px-2 py-1 w-full rounded-md my-0.5
                                            bg-gradient-to-r from-indigo-400 to-blue-500 hover:from-violet-500 hover:to-yellow-500
                                            ">{{ $scat->title }}</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Search --}}
        <div class="mx-2">
            <input wire:model="search" class="rounded-lg" type="text" name="search" id="search" placeholder="Search">
        </div>

    </div>



    <div class="px-2">
        @if ($selectedCategoryId)
            <span> {{ App\Models\Category::find($selectedCategoryId)->title }}</span>
        @endif

        @if ($selectedSubCategoryId)
            <span> {{ App\Models\Category::find($selectedSubCategoryId)->parent->title }}</span>
            <span>/</span>
            <span> {{ App\Models\Category::find($selectedSubCategoryId)->title }}</span>
        @endif
    </div>

    @foreach ($products as $product)
        <a href="{{ route('product.show', $product->id) }}">
            <div class="mx-auto justify-center px-6 md:flex md:space-x-6 xl:px-0">
                <div class="rounded-lg w-full">
                    <div
                        class="justify-between mb-2 rounded-lg p-2
                    transition-all duration-300 border border-transparent hover:border-gray-400
                    hover:shadow-md sm:flex sm:justify-start">
                        <div class="flex justify-center">
                            <img src="{{ asset('/storage/' . $product->pictures[0]->url) }}" alt="Фото"
                                class=" object-scale-down max-w-60 max-h-60 sm:w-20 sm:h-20" />
                        </div>
                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                            <div class="mt-2 sm:mt-0">
                                <h2 class="text-lg font-bold text-gray-900">
                                    <p class="sm:text-left text-center" style="white-space: pre-line;">
                                        {{ $product->title }}
                                    </p>
                                </h2>
                                <p class="mt-1 text-xs text-gray-700 text-center sm:text-left">{{ $product->model }}
                                </p>
                            </div>
                            <div
                                class="mt-4 flex justify-center sm:justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                <div class="flex flex-col items-start hover:shad">
                                    <p class="text-xs text-gray-400 line-through">
                                        {{ number_format($product->price * $paymentTypes[0]->interest * 1.1, 0, ',', ' ') }}
                                        сум</p>
                                    <p class="text-base text-red-500">
                                        {{ number_format($product->price * $paymentTypes[0]->interest, 0, ',', ' ') }}
                                        сум
                                    </p>

                                    {{-- <p class="text-xs">от

                                        {{ number_format(
                                            ($product->price * $paymentTypes[count($paymentTypes) - 1]->interest) /
                                                $paymentTypes[count($paymentTypes) - 1]->months,
                                            0,
                                            ',',
                                            ' ',
                                        ) }}
                                        сум / мес</p> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
    @endforeach

    <div>
        {{ $products->links() }}
    </div>

    <style>
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
        }
    </style>



</div>

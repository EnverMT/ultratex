<x-app-layout>
    <div class="mx-auto max-w-screen-2xl dark:text-white">
        {{-- Category / Subcategory / Product name --}}
        <div>
            <a href={{ route('home') }}>Home</a> / {{ $product->brand->category->title }}
            / {{ $product->brand->title }}
        </div>

        {{-- main content --}}
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center ">
                {{-- pictures --}}
                <div class="max-w-xl mx-auto">
                    @foreach ($product->pictures as $pic)
                        <div class=" max-w-xl max-h-xl object-scale-down mx-auto">
                            <img src="{{ asset('/storage/' . $pic->url) }}" alt="Фото">
                        </div>
                    @endforeach
                </div>

                {{-- details --}}
                <div class="flex flex-col items-center">
                    <div class="uppercase font-bold text-xl">{{ $product->title }}</div>
                    <div class="  font-bold text-2xl"><span class="text-red-700">{{ $product->price }}</span> сум</div>


                    <span class=" mt-10 uppercase">
                        <i class="fa-regular fa-star text-green-600"></i>
                        Рассрочка
                        <i class="fa-regular fa-star text-green-600"></i>
                    </span>

                    <table class="mt-2">
                        <tbody>
                            <tr>
                                <td class="">
                                    <span class="text-red-500">3</span>
                                    <span class="pr-6"> месяца</span>
                                </td>
                                <td class=" "> <span
                                        class="text-red-500">{{ round($product->price / (1 * 3)) }}</span>
                                    сум/месяц</td>
                            </tr>
                            <tr>
                                <td class="">
                                    <span class="text-red-500">6</span>
                                    <span class="pr-6"> месяцев</span>
                                </td>
                                <td class=" "> <span
                                        class="text-red-500">{{ round($product->price / (2 * 3)) }}</span>
                                    сум/месяц</td>
                            </tr>
                            <tr>
                                <td class="">
                                    <span class="text-red-500">9</span>
                                    <span class="pr-6"> месяцев</span>
                                </td>
                                <td class=" "> <span
                                        class="text-red-500">{{ round($product->price / (3 * 3)) }}</span>
                                    сум/месяц</td>
                            </tr>
                            <tr>
                                <td class="">
                                    <span class="text-red-500">12</span>
                                    <span class="pr-6"> месяцев</span>
                                </td>
                                <td class=" "> <span
                                        class="text-red-500">{{ round($product->price / (4 * 3)) }}</span>
                                    сум/месяц</td>
                            </tr>

                        </tbody>
                    </table>



                    <div class="mt-10 ">{{ $product->description }}</div>
                </div>

            </div>

        </div>


        {{-- details --}}
        <div class=" flex flex-col items-center m-5">
            <div class=" w-3/4  dark:bg-slate-700 text-justify">
                {{ $product->details }}</div>
        </div>


    </div>
</x-app-layout>

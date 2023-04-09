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
                        <div>
                            <img class=" max-w-60 max-h-60 object-scale-down mx-auto"
                                src="{{ asset('/storage/' . $pic->url) }}" alt="Фото">
                        </div>
                    @endforeach
                </div>

                {{-- details --}}
                <div class="flex flex-col items-center">
                    <div class="font-bold text-xl m-2"><p class="text-center" style="white-space: pre-line;">{{ $product->title }}</p></div>
                    <div class="font-bold text-md m-2"><p class="text-center" style="white-space: pre-line;">{{$product->brand->title}} - {{ $product->model }}</p></div>
                    <div class="  font-bold text-2xl"><span class="text-red-700">{{ number_format($product->price * $paymentTypes[0]->interest, 0, ",", " ") }}</span> сум</div>


                    <span class=" mt-10 uppercase">
                        <i class="fa-regular fa-star text-green-600"></i>
                        Рассрочка
                        <i class="fa-regular fa-star text-green-600"></i>
                    </span>

                    <table class="mt-2">
                        <tbody>
                            @foreach ($paymentTypes as $pt)
                                <tr>
                                    <td>
                                        <span class="text-red-500">{{$pt->months}}</span>
                                        <span class="pr-6"> месяца</span>
                                    </td>
                                    <td class=" "> <span
                                            class="text-red-500">{{ number_format(($product->price * $pt->interest) / ($pt->months), 0, ",", " ") }}</span>
                                        сум/месяц</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                    <div class="mt-10 m-5" style="white-space: pre-line;"><p class="text-justify">{{ $product->description }}</p></div>
                </div>

            </div>

        </div>


        {{-- details --}}
        <div class=" flex flex-col m-5">
            <div class="dark:bg-slate-700 " style="white-space: pre-line;">
                <p class="text-justify">{{ $product->details }}</p></div>
        </div>


    </div>
</x-app-layout>

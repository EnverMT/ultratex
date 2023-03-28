<x-app-layout>
    <div class="mx-auto max-w-screen-2xl">
        {{-- Category / Subcategory / Product name --}}
        <div>
            Home / Category / Subcategory
        </div>

        {{-- main content --}}
        <div class="flex flex-col items-center">
            {{-- pictures --}}
            <div class="sm:container">
                @foreach ($product->pictures as $pic)
                    <div class="">
                        <img class=" object-contain mx-auto" src="{{ asset($pic->url) }}" alt="">
                    </div>
                @endforeach
            </div>

            {{-- details --}}
            <div class="flex flex-col items-center">
                <div class="uppercase font-bold text-xl">{{ $product->title }}</div>
                <div class=" text-red-700 font-bold text-2xl">{{ $product->price }} сум</div>
                <div class=" text-gray-500">{{ $product->details }}</div>
            </div>

        </div>

        {{-- descriptions --}}
        <div>

        </div>


    </div>
</x-app-layout>

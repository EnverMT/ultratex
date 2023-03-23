<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('UltraTex - Home') }}
        </h2>
    </x-slot>

    <div class="mt-8 grid grid-cols-3 gap-10 container">

        @foreach ($categories as $category)
            <div class="flex flex-col">
                <div>
                    <img src="{{ asset('assets/img/shop01.png') }}" alt="">
                </div>
                <div class="p-3 m-2">
                    <h3>{{ __($category->title) }}<br>{{ __('Collection') }}</h3>
                    <a href="#">{{ __('Shop now') }} <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>

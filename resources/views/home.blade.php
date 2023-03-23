<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('UltraTex - Home') }}
        </h2>
    </x-slot>

    <!-- SECTION -->
    <div>
        <!-- container -->
        <div>
            <!-- row -->
            <div>
                <!-- shop -->
                <div>
                    <div>
                        <div">
                            <img src="./img/shop01.png" alt="">
                    </div>
                    <div>
                        <h3>{{ __('Laptop') }}<br>{{ __('Collection') }}</h3>
                        <a href="#">{{ __('Shop now') }} <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /SECTION -->
</x-app-layout>

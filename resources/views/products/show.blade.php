<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('UltraTex - Product.show') }}
        </h2>
    </x-slot>


    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        @foreach ($product->pictures as $pic)
                            <div class="product-preview">
                                <img src="{{ asset('assets/img/' . $pic->url) }}" alt="">
                            </div>
                        @endforeach


                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        @foreach ($product->pictures as $pic)
                            <div class="product-preview">
                                <img src="{{ asset('assets/img/' . $pic->url) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{ __($product->title) }}</h2>

                        <div>
                            <h3 class="product-price">{{ __($product->price) }} сум</h3>
                        </div>



                        <div>
                            (price/month)*110% тыс сум / месяц ($month=3 месяца)
                        </div>
                        <div>
                            (price/month)*110% тыс сум / месяц (6 месяца)
                        </div>
                        <div>
                            (price/month)*110% тыс сум / месяц (12 месяца)
                        </div>

                        <br />
                        <br />

                        <p>{{ __($product->description) }}</p>


                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Описание</a></li>
                            <li><a data-toggle="tab" href="#tab2">Условия</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{ __($product->description) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{{ __($product->details) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->



</x-app-layout>

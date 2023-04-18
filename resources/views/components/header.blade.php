<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div class="bg-gray-800 text-white text-sm">
        <div class=" max-w-screen-xl mx-auto">
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex items-center">
                    <ul class="flex flex-wrap">
                        <li class="hover:text-red-500 mx-4"><a href="tel:+998977365885"><i
                                    class="fa fa-phone text-green-700"></i>
                                +998 97 736 58 85</a></li>
                        <li class="hover:text-red-500 mx-4"><a href="https://goo.gl/maps/dR44ooM6KM863zAy6"
                                target="_blank">
                                <i class="fa fa-map-marker-alt text-red-500">
                                </i> Бекабад, ул.Аббасова, UzBum </a></li>
                        <li class="hover:text-red-500 mx-4"><a href="https://t.me/rzon_uz/1" target="_blank">
                                <i class="fa-brands fa-telegram text-blue-300"></i> Rzon</a></li>
                    </ul>
                </div>

                <div class="flex justify-between flex-wrap">
                    <div class="flex items-center gap-5 flex-wrap">


                        <ul class="flex gap-3 items-center dropdown-content">
                            @auth
                                @if (Auth::user()->is_admin == 1)
                                    <li class="px-2 hover:text-red-400"><a
                                            href="{{ route('dashboard') }}"></i>@lang('header.dashboard')</a>
                                    </li>
                                @endif
                                <li class="hover:text-green-500"><a href="{{ route('profile.edit') }}"><i
                                            class="fa fa-user-o"></i>{{ Auth::user()->name }}</a>
                                </li>

                                <li class="hover:text-red-500">
                                    <form method="POST" action="{{ route('logout') }} ">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                                                class="fa fa-sign-out"></i>@lang('header.logout')</a>
                                    </form>
                                </li>
                            @else
                                <li class="hover:text-red-500"><a href="{{ route('login') }}"><i
                                            class=""></i>@lang('header.login')</a></li>
                                <li class="hover:text-red-500"><a href="{{ route('register') }}"><i
                                            class=""></i>@lang('header.register')</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>


    {{-- Logo and Searchbar --}}
    <div class="max-w-screen-xl mx-auto">
        <div class="flex justify-between items-center">
            <div class="w-40 m-2">
                <a class=" inline-block" href="{{ route('home') }}">


                    <img src="{{ asset('assets/img/logo.png') }}" alt="">



                </a>
            </div>
            <div>
                <ul class="flex mx-3 text-lg">

                    <li
                        class="px-2 hover:text-red-400  {{ session()->get('locale') == 'en' ? 'bg-green-800 rounded-md' : '' }} ">
                        <a href={{ route('changeLang', ['lang' => 'en']) }}>En</a>
                    </li>
                    <li
                        class="px-2 hover:text-red-400 {{ session()->get('locale') == 'ru' ? 'bg-green-800 rounded-md' : '' }}">
                        <a href={{ route('changeLang', ['lang' => 'ru']) }}>Ru</a>
                    </li>
                    <li
                        class="px-2 hover:text-red-400  {{ session()->get('locale') == '' ? 'bg-green-800 rounded-md' : '' }} {{ session()->get('locale') == 'uz' ? 'bg-green-800 rounded-md' : '' }}">
                        <a href={{ route('changeLang', ['lang' => 'uz']) }}>Uz</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</header>

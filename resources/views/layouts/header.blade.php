<!-- HEADER -->
<header class="bg-gray-800 text-white text-sm">
    <!-- TOP HEADER -->
    <div class="mx-auto max-w-screen-2xl">
        <div class="flex items-center justify-between flex-wrap">
            <div class="flex items-center">
                <div class="text-2xl"><i class="fa-brands fa-google text-red-500"></i></div>
                <ul class="flex-row lg:flex justify-between flex-wrap">
                    <li class="hover:text-red-500 mx-4"><a href="#"><i class="fa fa-phone text-red-700"></i>
                            +998 97 736
                            58 85</a></li>
                    <li class="hover:text-red-500 mx-4"><a href="#"><i class="fa fa-map-marker text-red-700">
                            </i> Бекабад, ул.Аббасова, UltraTex </a></li>
                    <li class="hover:text-red-500 mx-4"><a href="https://t.me/ultra_tex/31">
                            <i class="fa-brands fa-telegram text-red-700"></i> ultra_tex</a></li>
                </ul>
            </div>

            <div class="flex items-center">
                <div class="p-1 sm:hidden mx-3">
                    <i class="fa-solid fa-bars"></i>
                </div>


                <div class="hidden sm:flex items-center gap-5 flex-wrap">
                    <select class="changeLang bg-gray-800 text-sm border-0">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>Eng</option>
                        <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Рус</option>
                        <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>Узб</option>
                    </select>

                    @auth
                        <ul class="flex gap-3 items-center">
                            @if (Auth::user()->is_admin == 1)
                                <li><a href="{{ route('dashboard') }}"><i class="fa fa-columns"></i>@lang('header.dashboard')</a>
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
                        </ul>
                    @else
                        <ul class="flex gap-3 items-center">
                            <li class="hover:text-red-500"><a href="{{ route('login') }}"><i
                                        class=""></i>@lang('header.login')</a></li>
                            <li class="hover:text-red-500"><a href="{{ route('register') }}"><i
                                        class=""></i>@lang('header.register')</a></li>
                        </ul>

                    @endauth
                </div>
            </div>

        </div>
    </div>
    <!-- /TOP HEADER -->
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        document.querySelector('.changeLang').addEventListener('change', (e) => {
            window.location.href = url + "?lang=" + e.target.value;
        })
    </script>
</header>

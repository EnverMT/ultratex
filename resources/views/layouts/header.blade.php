<!-- HEADER -->
<header class="bg-gray-800 text-white">
    <!-- TOP HEADER -->
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <div>
                <ul class="flex items-center">
                    <li class="p-1 m-1"><a href="#"><i class="fa fa-phone"></i> +998 97 736 58 85</a></li>
                    <li class="p-1 m-1"><a href="#"><i class="fa fa-map-marker">
                            </i> Бекабад, ул.Аббасова, UltraTex </a></li>
                    <li class="p-1 m-1"><a href="https://t.me/ultra_tex/31">
                            <i class="fa-brands fa-telegram"></i> Telegram</a></li>
                </ul>
            </div>

            <div class="flex">
                <select class="changeLang bg-gray-700">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>Eng</option>
                    <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Рус</option>
                    <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>Узб</option>
                </select>

                @auth
                    <ul class="flex">
                        @if (Auth::user()->is_admin == 1)
                            <li><a href="{{ route('dashboard') }}"><i class="fa fa-columns"></i>@lang('header.dashboard')</a></li>
                        @endif
                        <li><a href="{{ route('profile.edit') }}"><i class="fa fa-user-o"></i>{{ Auth::user()->name }}</a>
                        </li>

                        <li>
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
                    <ul class="flex">
                        <li><a href="{{ route('login') }}"><i class=""></i>@lang('header.login')</a></li>
                        <li><a href="{{ route('register') }}"><i class=""></i>@lang('header.register')</a></li>
                    </ul>

                @endauth
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

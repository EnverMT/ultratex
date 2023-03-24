<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                <li><a href="#"><i class="fa fa-telegram"></i> Telegram</a></li>
            </ul>

            <select class="changeLang">
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>Eng</option>
                <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Рус</option>
                <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>Узб</option>
            </select>
            
            @auth
                <ul class="header-links pull-right">
                    @if (Auth::user()->is_admin == 1)
                        <li><a href="{{ route('dashboard') }}"><i class="fa fa-columns"></i>@lang('header.dashboard')</a></li>
                    @endif
                    <li><a href="{{ route('profile.edit') }}"><i class="fa fa-user-o"></i>{{ Auth::user()->name }}</a></li>

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
                <ul class="header-links pull-right">
                    <li><a href="{{ route('login') }}"><i class=""></i>@lang('header.login')</a></li>
                    <li><a href="{{ route('register') }}"><i class=""></i>@lang('header.register')</a></li>
                </ul>

            @endauth

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

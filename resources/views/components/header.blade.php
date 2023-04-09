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
                                </i> Бекабад, ул.Аббасова, UltraTex </a></li>
                        <li class="hover:text-red-500 mx-4"><a href="https://t.me/ultra_tex/31" target="_blank">
                                <i class="fa-brands fa-telegram text-blue-300"></i> ultra_tex</a></li>
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
                <a href="{{ route('home') }}">
                    <svg xmlns:mydata="http://www.w3.org/2000/svg" mydata:contrastcolor="4d2f41"
                        mydata:template="Contrast" mydata:presentation="2.5" mydata:layouttype="undefined"
                        mydata:specialfontid="undefined" mydata:id1="121" mydata:id2="120" mydata:companyname="UzBum"
                        mydata:companytagline="" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="80 190 390 88">
                        <defs>
                            <linearGradient x1="80.10373" y1="235" x2="469.89627" y2="235"
                                gradientUnits="userSpaceOnUse" id="color-16362522490">
                                <stop offset="0" stop-color="#52557d"></stop>
                                <stop offset="1" stop-color="#67609e"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="url(#color-16362522490)" fill-rule="none" stroke="none" stroke-width="1"
                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                            stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                            text-anchor="none" style="mix-blend-mode: normal">
                            <g
                                data-paper-data="{&quot;isGlobalGroup&quot;:true,&quot;bounds&quot;:{&quot;x&quot;:80.10373455786734,&quot;y&quot;:190.77451453881386,&quot;width&quot;:389.79253088426526,&quot;height&quot;:88.45097092237225}}">
                                <g data-paper-data="{&quot;isPrimaryText&quot;:true}">
                                    <path
                                        d="M97.33773,246.02469c0,2.19649 0.38016,4.26626 1.14049,6.20931c0.76032,1.94305 1.81633,3.65378 3.16801,5.13218c1.35169,1.47841 2.93569,2.64001 4.75202,3.48482c1.81633,0.8448 3.7805,1.26721 5.89251,1.26721c2.11201,0 4.07618,-0.4224 5.89251,-1.26721c1.81633,-0.8448 3.42146,-2.00641 4.81538,-3.48482c1.39393,-1.47841 2.49217,-3.18913 3.29474,-5.13218c0.80256,-1.94305 1.20385,-4.01282 1.20385,-6.20931v-55.25018h17.234v55.25018c0,4.7309 -0.86592,9.12388 -2.59777,13.17894c-1.73185,4.05506 -4.05506,7.561 -6.96963,10.51781c-2.91457,2.95681 -6.35715,5.28002 -10.32773,6.96963c-3.97058,1.68961 -8.15236,2.53441 -12.54534,2.53441c-4.39298,0 -8.53252,-0.8448 -12.41862,-2.53441c-3.8861,-1.68961 -7.28643,-4.01282 -10.20101,-6.96963c-2.91457,-2.95681 -5.23778,-6.46275 -6.96963,-10.51781c-1.73185,-4.05506 -2.59777,-8.44804 -2.59777,-13.17894v-55.25018h17.234z"
                                        data-paper-data="{&quot;glyphName&quot;:&quot;U&quot;,&quot;glyphIndex&quot;:0,&quot;firstGlyphOfWord&quot;:true,&quot;word&quot;:1}"
                                        fill-rule="nonzero"></path>
                                    <path
                                        d="M158.16362,190.77451h56.6441v12.9255l-36.49553,58.92507h36.49553v15.84007h-58.41819v-12.67206l36.49553,-58.79835h-34.72144z"
                                        data-paper-data="{&quot;glyphName&quot;:&quot;Z&quot;,&quot;glyphIndex&quot;:1,&quot;word&quot;:1}"
                                        fill-rule="nonzero"></path>
                                    <path
                                        d="M264.10203,190.77451c3.71714,0 7.09635,0.59136 10.13765,1.77409c3.04129,1.18273 5.66019,2.80897 7.85668,4.87874c2.19649,2.06977 3.8861,4.56194 5.06882,7.47651c1.18273,2.91457 1.77409,6.14595 1.77409,9.69413c0,4.3085 -0.7392,7.79332 -2.21761,10.45445c-1.47841,2.66113 -3.27362,4.8365 -5.38563,6.52611c1.68961,0.59136 3.37922,1.52065 5.06882,2.78785c1.68961,1.26721 3.18913,2.83009 4.49858,4.68866c1.30945,1.85857 2.36545,4.01282 3.16801,6.46275c0.80256,2.44993 1.20385,5.19554 1.20385,8.23684c0,4.05506 -0.69696,7.60324 -2.09089,10.64453c-1.39393,3.04129 -3.37922,5.61795 -5.95587,7.72996c-2.57665,2.11201 -5.68131,3.69602 -9.31396,4.75202c-3.63266,1.056 -7.72996,1.58401 -12.2919,1.58401h-37.88946v-87.69065zM264.48219,226.12956c1.09825,0 2.13313,-0.27456 3.10465,-0.82368c0.97152,-0.54912 1.83745,-1.26721 2.59777,-2.15425c0.76032,-0.88704 1.37281,-1.90081 1.83745,-3.04129c0.46464,-1.14049 0.69696,-2.30209 0.69696,-3.48482c0,-2.70337 -0.76032,-4.87874 -2.28097,-6.52611c-1.52065,-1.64737 -3.50594,-2.47105 -5.95587,-2.47105h-19.76841v18.50121zM244.71378,261.73804h22.30282c3.54818,0 6.42051,-0.8448 8.617,-2.53441c2.19649,-1.68961 3.29474,-4.13954 3.29474,-7.34979c0,-1.60513 -0.38016,-3.06241 -1.14049,-4.37186c-0.76032,-1.30945 -1.77409,-2.40769 -3.04129,-3.29474c-1.26721,-0.88704 -2.68225,-1.58401 -4.24514,-2.09089c-1.56289,-0.50688 -3.14689,-0.76032 -4.75202,-0.76032h-21.03562z"
                                        data-paper-data="{&quot;glyphName&quot;:&quot;B&quot;,&quot;glyphIndex&quot;:2,&quot;word&quot;:1}"
                                        fill-rule="nonzero"></path>
                                    <path
                                        d="M469.89627,190.77451v87.69065h-17.234v-45.61941l-19.38825,45.61941h-9.37732l-19.38825,-45.61941v45.61941h-17.234v-87.69065h17.74088l23.57003,55.25018l23.57003,-55.25018z"
                                        data-paper-data="{&quot;glyphName&quot;:&quot;M&quot;,&quot;glyphIndex&quot;:4,&quot;lastGlyphOfWord&quot;:true,&quot;word&quot;:1}"
                                        fill-rule="nonzero"></path>
                                    <g data-paper-data="{&quot;isIcon&quot;:&quot;true&quot;,&quot;iconType&quot;:&quot;icon&quot;,&quot;rawIconId&quot;:&quot;4033925&quot;,&quot;selectedEffects&quot;:{&quot;container&quot;:&quot;&quot;,&quot;transformation&quot;:&quot;&quot;,&quot;pattern&quot;:&quot;&quot;},&quot;combineTerms&quot;:&quot;undefined&quot;,&quot;isDetailed&quot;:false,&quot;fillRule&quot;:&quot;evenodd&quot;,&quot;bounds&quot;:{&quot;x&quot;:306.68000000000006,&quot;y&quot;:190.77499999999998,&quot;width&quot;:64.62799999999993,&quot;height&quot;:88.45000000000005},&quot;iconStyle&quot;:&quot;icon-in-text&quot;,&quot;suitableAsStandaloneIcon&quot;:true}"
                                        fill-rule="evenodd">
                                        <path
                                            d="M371.308,246.025c0,4.731 -0.866,9.124 -2.598,13.179c-1.732,4.055 -4.055,7.561 -6.97,10.517c-2.914,2.957 -6.357,5.28 -10.327,6.97c-3.971,1.69 -8.153,2.534 -12.546,2.534c-4.393,0 -8.532,-0.844 -12.418,-2.534c-3.88667,-1.68933 -7.287,-4.01267 -10.201,-6.97c-2.915,-2.956 -5.238,-6.462 -6.97,-10.517c-1.732,-4.055 -2.598,-8.448 -2.598,-13.179v-55.25h64.628zM359.60777,214.50809c-5.06244,-5.06514 -11.81584,-8.08425 -18.9662,-8.4789h-0.03871c-0.67486,0.01009 -1.22758,0.54781 -1.25175,1.22685c-0.04153,0.71647 0.50174,1.33271 1.21776,1.38134c14.26782,0.82629 25.3102,12.81777 24.95987,27.10522c-0.35024,14.28745 -11.96706,25.72333 -26.25833,25.84938c-14.29117,0.12605 -26.10784,-11.10318 -26.71008,-25.38227c-0.04385,-0.71494 -0.6472,-1.26602 -1.36317,-1.24503c-0.34633,0.01354 -0.67316,0.16385 -0.90878,0.41804c-0.1872,0.20684 -0.30398,0.46602 -0.33625,0.74029v0.35951c0.65583,12.90011 9.74792,23.83216 22.33068,26.81714c12.64492,2.99979 25.74514,-2.75432 32.09096,-14.09551c6.34573,-11.34119 4.39649,-25.51604 -4.77508,-34.72333zM339.03303,259.37447c13.15193,0.08097 23.97766,-10.32363 24.41833,-23.46847c0.44076,-13.14475 -9.66386,-24.25105 -22.79161,-25.0512c-0.71775,-0.02761 -1.32191,0.53184 -1.34954,1.24957c-0.02763,0.71773 0.53182,1.32193 1.24957,1.34954c9.59733,0.68446 17.59585,7.61156 19.64397,17.01278c2.04821,9.40122 -2.34383,19.02773 -10.78674,23.6425c-8.44282,4.61469 -18.91695,3.11384 -25.72415,-3.68619c-0.50701,-0.48938 -1.31055,-0.48938 -1.81756,0c-0.48011,0.51073 -0.48011,1.30682 0,1.81756c4.5398,4.56979 10.71622,7.13782 17.15773,7.13391zM355.91004,235.66245c-0.30326,8.92693 -7.50288,16.07519 -16.43171,16.31457c-0.70848,0.01972 -1.27256,0.59989 -1.27229,1.30864c0.01491,0.70912 0.59943,1.27338 1.30864,1.2632c10.23112,-0.36378 18.43757,-8.57987 18.78917,-18.81144c0.3517,-10.23148 -7.27132,-18.99165 -17.45327,-20.05701h-0.23628c-0.69467,0.01718 -1.26193,0.56081 -1.30864,1.25411c-0.0259,0.68267 0.49937,1.26048 1.18141,1.29955l0.13632,0.03635c8.89203,0.84471 15.58991,8.46518 15.28665,17.39201zM347.74821,243.8071c3.52988,-3.52588 4.58751,-8.83124 2.67953,-13.4411c-1.90798,-4.60996 -6.40552,-7.61611 -11.39472,-7.61611c-4.98919,0 -9.48674,3.00615 -11.39472,7.61611c-1.90798,4.60987 -0.85034,9.91522 2.67953,13.4411c4.81898,4.79944 12.61139,4.79944 17.43037,0z"
                                            data-paper-data="{&quot;glyphName&quot;:&quot;U&quot;,&quot;glyphIndex&quot;:3,&quot;word&quot;:1,&quot;isPathIcon&quot;:true}">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <div>
                <ul class="flex mx-3">

                    <li
                        class="px-2 hover:text-red-400  {{ session()->get('locale') == 'en' ? 'bg-green-800 rounded-md' : '' }} ">
                        <a href={{ route('changeLang', ['lang' => 'en']) }}>En</a>
                    </li>
                    <li
                        class="px-2 hover:text-red-400 {{ session()->get('locale') == 'ru' ? 'bg-green-800 rounded-md' : '' }}">
                        <a href={{ route('changeLang', ['lang' => 'ru']) }}>Ru</a></li>
                    <li
                        class="px-2 hover:text-red-400  {{ session()->get('locale') == '' ? 'bg-green-800 rounded-md' : '' }} {{ session()->get('locale') == 'uz' ? 'bg-green-800 rounded-md' : '' }}">
                        <a href={{ route('changeLang', ['lang' => 'uz']) }}>Uz</a>
                    </li>
                </ul>
            </div>
        </div>        

    </div>


</header>

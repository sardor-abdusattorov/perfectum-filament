@php use Illuminate\Support\Facades\Storage; @endphp
    <!-- FOOTER -->
<footer @class(['new-footer', 'new-footer--home' => request()->routeIs('home')])>
    <div class="container footer__container">
        <div class="new-footer__top">
            <div class="row footer__row">
                <div class="col-12 col-md-12 col-lg-5 footer__col">
                    <div class="new-footer__logo">
                        <img src="/images/footer-logo.png" alt="logo">
                    </div>
                    <div class="new-footer__text">
                        <a class="gazButton gazButton--strong-gray" href="{{route('about')}}">
                            {{translator('app', 'about_us')}}
                        </a>
                    </div>
                    <div class="new-footer__extra-info">
                        <ul>
                            <li>
                                <strong>Bosh ofis</strong>
                                <p>O’zbekiston, Toshkent shahri, Taras Shevchenko ko’chasi 21</p>
                                <br>
                                <a href="https://maps.app.goo.gl/mMui2JdxEfc2fECz7" target="_blank">
                                    Xaritada koʻrsatish
                                </a>
                            </li>
                            <li>
                                <strong>Qo’llab-quvvatlash telefonlari</strong>
                                <a href="tel:+998 98 127 0077">+998 98 127 0077</a>
                                <br>
                                <a href="tel:+998 98 305 1111">+998 98 305 1111</a>
                                <br>
                                <br>
                                <p>Perfectum abonentlari uchun — 077</p>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <p>Ma’lumot olish uchun — <a
                                        href="mailto:info@perfectum.uz">info@perfectum.uz</a>
                                </p>
                                <p>Shikoyat va murojaatlar uchun elektron pochta — <a
                                        href="mailto:hotline@perfectum.uz">hotline@perfectum.uz</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7 footer__col">
                    <div class="new-footer__menu-wrap">
                        <div class="new-footer__menu-column">
                            <div class="new-footer__menu-title">
                                <h3>{{translator('app', 'home_internet')}}</h3>
                            </div>
                            <div class="new-footer__menu-list">
                                <ul>
                                    @foreach($footer_menus[1] ?? [] as $menu)
                                        <li>
                                            <a href="{{ $menu->url }}" target="{{ $menu->target }}" class="footer_menu_class">
                                                {{ $menu->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="new-footer__menu-column">
                            <div class="new-footer__menu-title">
                                <h3>{{translator('app', 'for_abonents')}}</h3>
                            </div>
                            <div class="new-footer__menu-list">
                                <ul>
                                    @foreach($footer_menus[2] ?? [] as $menu)
                                        <li>
                                            <a href="{{ $menu->url }}" target="{{ $menu->target }}" class="footer_menu_class">
                                                {{ $menu->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="new-footer__menu-column">
                            <div class="new-footer__menu-title">
                                <h3>{{translator('app', 'useful')}}</h3>
                            </div>
                            <div class="new-footer__menu-list">
                                <ul>
                                    @foreach($footer_menus[3] ?? [] as $menu)
                                        <li>
                                            <a href="{{ $menu->url }}" target="{{ $menu->target }}" class="footer_menu_class">
                                                {{ $menu->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="new-footer__menu-column">
                            <div class="new-footer__menu-title">
                                <h3>{{translator('app', 'information')}}</h3>
                            </div>
                            <div class="new-footer__menu-list">
                                <ul>
                                    @foreach($footer_menus[4] ?? [] as $menu)
                                        <li>
                                            <a href="{{ $menu->url }}" target="{{ $menu->target }}" class="footer_menu_class">
                                                {{ $menu->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="new-footer__menu-column">
                            <div class="new-footer__menu-title">
                                <h3>{{translator('app', 'mobile_apps')}}</h3>
                                <ul>
                                    <li>
                                        <a href="{{site_setting('app_google_play')}}" target="_blank">
                                            <img src="/images/GooglePlay.svg" alt="google play">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{site_setting('app_app_store')}}" target="_blank">
                                            <img src="/images/AppStore.svg" alt="app store">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="new-footer__menu-title footer__menu-title--social">
                                <h3>{{translator('app', 'social_links')}}</h3>
                                <ul>
                                    @foreach($social_links as $social)
                                        <li>
                                            <a href="{{ $social->url }}" target="_blank" rel="noopener">
                                                <img src="{{ Storage::url($social->image) }}"
                                                     alt="{{ $social->name }}">
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-footer__bottom">
            <div class="row footer__row">
                <div class="col-12 col-md-12 col-lg-4 footer__col">
                    <p>
                        {{translator('app', 'footer_copyright')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- MOBILE MENU -->
<div class="mobile-menu">
    <div class="container">
        <div class="mobile-menu__wrap">
            <div class="mobile-menu__phones">
                <ul>
                    <li>
                        <a href="tel:+998 98 127 0077">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4008_1093)">
                                    <path
                                        d="M13.9565 11.8457V13.951C13.9574 14.1464 13.9173 14.3399 13.8391 14.519C13.7608 14.698 13.6459 14.8588 13.5019 14.9909C13.3579 15.123 13.1879 15.2237 13.0027 15.2862C12.8176 15.3489 12.6214 15.3721 12.4268 15.3545C10.2674 15.1198 8.19306 14.382 6.37061 13.2001C4.67505 12.1227 3.23751 10.6851 2.16008 8.98955C0.974105 7.15886 0.236042 5.0745 0.00569594 2.90538C-0.0118406 2.71132 0.0112222 2.51574 0.0734155 2.33108C0.135608 2.14643 0.235571 1.97674 0.366936 1.83284C0.498301 1.68893 0.65819 1.57395 0.836426 1.49522C1.01466 1.41649 1.20733 1.37574 1.40219 1.37556H3.50745C3.84802 1.3722 4.17818 1.4928 4.4364 1.71488C4.69463 1.93695 4.86329 2.24534 4.91096 2.58257C4.99981 3.25631 5.16461 3.91782 5.40219 4.5545C5.49661 4.80568 5.51704 5.07866 5.46107 5.34109C5.4051 5.60352 5.27507 5.84441 5.0864 6.03521L4.19517 6.92644C5.19416 8.68328 6.64883 10.138 8.40569 11.1369L9.29693 10.2457C9.48775 10.0571 9.72859 9.92707 9.99107 9.87107C10.2535 9.81507 10.5265 9.83553 10.7776 9.92993C11.4143 10.1675 12.0758 10.3323 12.7496 10.4211C13.0904 10.4693 13.4018 10.641 13.6243 10.9037C13.8469 11.1663 13.9651 11.5016 13.9565 11.8457Z"
                                        fill="#9BA1B9"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.40976 0.59936C8.45085 0.22957 8.7839 -0.0369023 9.15367 0.00417842C10.7297 0.179254 12.1992 0.884985 13.3212 2.00551C14.4431 3.12602 15.1507 4.59472 15.3277 6.17045C15.3692 6.54019 15.1032 6.8736 14.7335 6.91514C14.3638 6.95669 14.0304 6.69064 13.9888 6.3209C13.8459 5.04893 13.2747 3.86335 12.3691 2.95884C11.4634 2.05432 10.2771 1.48463 9.00496 1.34331C8.63519 1.30223 8.36869 0.969154 8.40976 0.59936ZM8.41811 3.35176C8.48933 2.98658 8.84319 2.74829 9.20832 2.81955C10.0253 2.97895 10.7762 3.37853 11.3649 3.96716C11.9535 4.55577 12.3531 5.30665 12.5125 6.12369C12.5837 6.48887 12.3454 6.84266 11.9803 6.91391C11.6151 6.98515 11.2613 6.74688 11.1901 6.3817C11.082 5.82787 10.8111 5.31889 10.4121 4.91989C10.0131 4.52089 9.50416 4.25003 8.9503 4.14198C8.58517 4.07073 8.34687 3.71693 8.41811 3.35176Z"
                                          fill="#9BA1B9"></path>
                                </g>
                                <defs>
                                    <clippath id="clip0_4008_1093">
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clippath>
                                </defs>
                            </svg>
                            +998 98 127 0077 </a>
                    </li>
                    <li>
                        <a href="tel:+998 98 305 1111">+998 98 305 1111</a>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu__language">
					<span>
						<svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_2482_3230)">
								<path
                                    d="M8.00003 0.864258C6.37403 2.46001 5.28803 4.60451 5.05078 7.00001H10.9493C10.712 4.60451 9.62603 2.46001 8.00003 0.864258Z"
                                    fill="#9BA1B9"></path>
								<path
                                    d="M9.70312 0C11.2401 1.84175 12.7401 4.46775 12.9491 7H16.0001C15.5996 3.79875 12.9531 0.96875 9.70312 0Z"
                                    fill="#9BA1B9"></path>
								<path
                                    d="M5.05078 9C5.28803 11.3955 6.37403 13.54 8.00003 15.1357C9.62603 13.54 10.712 11.3955 10.9493 9H5.05078Z"
                                    fill="#9BA1B9"></path>
								<path
                                    d="M0 7H3.05075C3.25975 4.46775 4.75975 1.84175 6.29675 0C3.0155 1.0155 0.4005 3.79875 0 7Z"
                                    fill="#9BA1B9"></path>
								<path
                                    d="M6.28125 16C4.74425 14.1582 3.25975 11.5322 3.05075 9H0C0.4005 12.2013 3.0155 15.0312 6.28125 16Z"
                                    fill="#9BA1B9"></path>
								<path
                                    d="M15.9999 9H12.9491C12.7401 11.5322 11.2401 14.1582 9.70312 16C12.9999 15.0312 15.5994 12.2013 15.9999 9Z"
                                    fill="#9BA1B9"></path>
							</g>
							<defs>
								<clippath id="clip0_2482_3230">
									<rect width="16" height="16" fill="white"></rect>
								</clippath>
							</defs>
						</svg> Sayt tili: </span>
                <ul>
                    <li class=" active ">
                        <a href="static-pages/kak-podklyucitsya.html"> O&#039;zb </a>
                    </li>
                    <li class="">
                        <a href="static-pages/yuridiceskie-dokumenty.html"> Рус </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu__menu">
                <ul>
                    <li>
                        <a href="#" data-get-dropdown="">Uy internet</a>
                        <div class="mobile-menu__menu-dropdown">
                            <div class="mobile-menu__menu-dropdown-wrapper">
                                <div
                                    class="mobile-menu__menu-dropdown-item mobile-menu__menu-dropdown-item--type-1">
                                    <ul>
                                        <li class="">
                                            <a href="tariffs.html#home">
                                                <img src="assets/images/menu-icon-1.svg" alt="">Tariflar </a>
                                        </li>
                                        <li class="">
                                            <a href="coverage-area.html">
                                                <img src="assets/images/menu-icon-2.svg" alt="">Qamrov xaritasi </a>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                    class="mobile-menu__menu-dropdown-item mobile-menu__menu-dropdown-item--type-2">
                                    <ul>
                                        <li class="">
                                            <a href="services.html">
                                                <img src="assets/images/menu-icon-3.svg" alt="">Xizmatlar </a>
                                        </li>
                                        <li>
                                            <a href="device/brands.html">
                                                <img src="assets/images/menu-icon-4.svg" alt="">Uskunalar katalogi
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="actions.html">
                                                <img src="assets/images/menu-icon-5.svg" alt="">Aksiyalar </a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://perfectum.uz/static-pages/service-show/programma-loyalnost">
                                                <img src="assets/images/menu-icon-6.svg" alt="">Sodiqlik dasturi
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="additionals/faq.html">
                                                <img src="assets/images/menu-icon-7.svg" alt="">FAQ </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-get-dropdown="">Mobil aloqa</a>
                        <div class="mobile-menu__menu-dropdown">
                            <div class="mobile-menu__menu-dropdown-wrapper">
                                <div
                                    class="mobile-menu__menu-dropdown-item mobile-menu__menu-dropdown-item--type-1">
                                    <ul>
                                        <li class="">
                                            <a href="tariffs.html">
                                                <img src="assets/images/menu-icon-1.svg" alt="">Tariflar </a>
                                        </li>
                                        <li class="">
                                            <a href="coverage-area.html">
                                                <img src="assets/images/menu-icon-2.svg" alt="">Qamrov xaritasi </a>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                    class="mobile-menu__menu-dropdown-item mobile-menu__menu-dropdown-item--type-2">
                                    <ul>
                                        <li class="">
                                            <a href="services.html">
                                                <img src="assets/images/menu-icon-3.svg" alt="">Xizmatlar </a>
                                        </li>
                                        <li>
                                            <a href="device/brands.html">
                                                <img src="assets/images/menu-icon-4.svg" alt="">Uskunalar katalogi
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="actions.html">
                                                <img src="assets/images/menu-icon-5.svg" alt="">Aksiyalar </a>
                                        </li>
                                        <li>
                                            <a href="additionals/available_numbers.html">
                                                <img src="assets/images/menu-icon-6.svg" alt="">Boʻsh raqamlar </a>
                                        </li>
                                        <li class="">
                                            <a href="additionals/faq.html">
                                                <img src="assets/images/menu-icon-7.svg" alt="">FAQ </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="static-pages/ofisy.html">Savdo ofislari</a>
                    </li>
                    <li class="">
                        <a href="coverage-area.html">Qamrov xaritasi</a>
                    </li>
                    <li class="">
                        <a href="news.html">Yangiliklar</a>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu__buttons">
                <ul>
                    <li>
                        <a class="gazButton " href="https://lk.perfectum.uz/ru/login" target="_blank">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.5613 8.50081C12.2532 7.79867 12.7222 6.90766 12.9092 5.93976C13.0962 4.97187 12.9929 3.97029 12.6124 3.06092C12.2318 2.15155 11.5909 1.37497 10.7703 0.828794C9.94959 0.282614 8.98579 -0.00878906 8 -0.00878906C7.01421 -0.00878906 6.05041 0.282614 5.22975 0.828794C4.40909 1.37497 3.7682 2.15155 3.38763 3.06092C3.00705 3.97029 2.90378 4.97187 3.0908 5.93976C3.27782 6.90766 3.74677 7.79867 4.43872 8.50081C3.13259 9.01425 2.01096 9.90847 1.21944 11.0674C0.427922 12.2263 0.00305709 13.5964 1.60752e-07 14.9998C-7.43302e-05 15.1312 0.0257406 15.2612 0.0759689 15.3826C0.126197 15.504 0.199854 15.6142 0.292727 15.7071C0.385601 15.8 0.495869 15.8736 0.617229 15.9239C0.738588 15.9741 0.868657 15.9999 1 15.9998H15C15.1313 15.9999 15.2614 15.9741 15.3828 15.9239C15.5041 15.8736 15.6144 15.8 15.7073 15.7071C15.8001 15.6142 15.8738 15.504 15.924 15.3826C15.9743 15.2612 16.0001 15.1312 16 14.9998C15.9969 13.5964 15.5721 12.2263 14.7806 11.0674C13.989 9.90847 12.8674 9.01425 11.5613 8.50081ZM8 1.99982C8.59334 1.99982 9.17336 2.17577 9.66671 2.50541C10.1601 2.83506 10.5446 3.3036 10.7716 3.85177C10.9987 4.39995 11.0581 5.00315 10.9424 5.58509C10.8266 6.16704 10.5409 6.70159 10.1213 7.12114C9.70176 7.5407 9.16721 7.82642 8.58527 7.94218C8.00333 8.05794 7.40013 7.99853 6.85195 7.77146C6.30377 7.5444 5.83524 7.15988 5.50559 6.66653C5.17595 6.17319 5 5.59317 5 4.99982C5.00088 4.20444 5.31724 3.4419 5.87965 2.87948C6.44207 2.31706 7.20462 2.00071 8 1.99982ZM2.09962 13.9998C2.33197 12.8713 2.94618 11.8573 3.83877 11.1287C4.73137 10.4001 5.8478 10.0015 7 9.99982H9C10.1522 10.0015 11.2686 10.4001 12.1612 11.1287C13.0538 11.8573 13.668 12.8713 13.9004 13.9998H2.09962Z"
                                    fill="#3E3E3E"></path>
                            </svg>
                            Shaxsiy kabinet </a>
                    </li>
                    <li>
                        <a class="gazButton gazButton--red" href="static-pages/kak-podklyucitsya.html">Ulanish</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

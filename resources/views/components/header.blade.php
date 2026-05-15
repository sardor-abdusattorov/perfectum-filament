@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


    $currentLocale = LaravelLocalization::getCurrentLocale();
    $supportedLocales = LaravelLocalization::getSupportedLocales();

    $pathSegments = explode('/', trim(request()->path(), '/'));
    if (! empty($pathSegments) && array_key_exists($pathSegments[0], $supportedLocales)) {
        array_shift($pathSegments);
    }
    $currentPath = implode('/', $pathSegments);

    $menuIsActive = function ($menu) use ($currentPath) {
        $candidates = [$menu->url];
        if ($menu->children->isNotEmpty()) {
            foreach ($menu->children as $child) {
                $candidates[] = $child->url;
            }
        }
        foreach ($candidates as $url) {
            $target = trim((string) $url, '/');
            if ($target === '' || $target === '#') {
                continue;
            }
            if ($currentPath === $target || str_starts_with($currentPath, $target . '/')) {
                return true;
            }
        }
        return false;
    };
@endphp

<!-- HEADER -->
<header class="new-header">
    <div class="new-header__top">
        <div class="container new-header__container">
            <div class="row new-header__row">
                <div class="col-12 new-header__col">
                    <div class="new-header__left">
                        <ul>
                            @foreach($topMenus as $menu)
                                @php
                                    $classes = array_filter([
                                        $menu->children->isNotEmpty() ? 'has-children' : null,
                                        $menuIsActive($menu) ? 'active' : null,
                                    ]);
                                @endphp
                                <li @class($classes)>
                                    <a @if($menu->url !== '#') href="{{ LaravelLocalization::getLocalizedURL(null, url($menu->url)) }}" @endif
                                       @if($menu->target) target="{{ $menu->target }}" @endif>
                                        {{ $menu->name }}
                                    </a>

                                    @if($menu->children->isNotEmpty())
                                        <ul>
                                            @foreach($menu->children as $child)
                                                <li @class(['active' => $menuIsActive($child)])>
                                                    <a @if($child->url !== '#') href="{{ LaravelLocalization::getLocalizedURL(null, url($child->url)) }}" @endif
                                                       @if($child->target) target="{{ $child->target }}" @endif>
                                                        {{ $child->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="new-header__right">
                        <div class="new-header__phones">
                            <ul>
                                <li>
                                    <a href="tel:+998 98 127 0077">
                                        <x-icon.phone/> +998 98 127 0077
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+998 98 305 1111">+998 98 305 1111</a>
                                </li>
                            </ul>
                        </div>
                        <div class="new-header__language">
                            <div class="new-header__language-dropdown">
                                <a class="new-header__language-toggle">
                                    <x-icon.globe class="new-header__language-icon"/>
                                    <span class="new-header__language-current">
                                        {{ \Illuminate\Support\Str::ucfirst($supportedLocales[$currentLocale]['native'] ?? $currentLocale) }}
                                    </span>
                                </a>
                                <ul class="new-header__language-list">
                                    @foreach ($supportedLocales as $code => $properties)
                                        @if ($code !== $currentLocale)
                                            <li class="new-header__language-item">
                                                <a class="new-header__language-link" rel="alternate" hreflang="{{ $code }}"
                                                   href="{{ LaravelLocalization::getLocalizedURL($code) }}">
                                                    {{ \Illuminate\Support\Str::ucfirst($properties['native'] ?? $code) }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-header__bottom">
        <div class="container new-header__container">
            <div class="row new-header__row">
                <div class="col-12 new-header__col">
                    <div class="new-header__left">
                        <div class="new-header__logo">
                            <a href="index.htm">
                                <img src="assets/images/SZkoPAX1pWvIHdI16puBp7HFiUHxnEtwyy9JhiMV.png" alt="">
                            </a>
                        </div>
                        <div class="new-header__menu">
                            <ul>
                                <li>
                                    <a href="#">Uy internet</a>
                                    <div class="new-header__menu-dropdown">
                                        <div class="new-header__menu-dropdown-wrapper">
                                            <div
                                                class="new-header__menu-dropdown-item new-header__menu-dropdown-item--type-1">
                                                <ul>
                                                    <li class="">
                                                        <a href="tariffs.html#home">
                                                            <img src="assets/images/menu-icon-1.svg"
                                                                 alt="">Tariflar </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="coverage-area.html">
                                                            <img src="assets/images/menu-icon-2.svg"
                                                                 alt="">Qamrov xaritasi </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="new-header__menu-dropdown-item new-header__menu-dropdown-item--type-2">
                                                <ul>
                                                    <li class="">
                                                        <a href="services.html">
                                                            <img src="assets/images/menu-icon-3.svg"
                                                                 alt="">Xizmatlar </a>
                                                    </li>
                                                    <li>
                                                        <a href="device/brands.html">
                                                            <img src="assets/images/menu-icon-4.svg"
                                                                 alt="">Uskunalar katalogi </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="actions.html">
                                                            <img src="assets/images/menu-icon-5.svg"
                                                                 alt="">Aksiyalar </a>
                                                    </li>
                                                    <li>
                                                        <a href="service-show/programma-loyalnost.html">
                                                            <img src="assets/images/menu-icon-6.svg"
                                                                 alt="">Sodiqlik dasturi </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="additionals/faq.html">
                                                            <img src="assets/images/menu-icon-7.svg" alt="">FAQ
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="new-header__menu-dropdown-item new-header__menu-dropdown-item--type-3">
                                                <ul>
                                                    <li>
                                                        <a href="tariff-show/asl-5g.html">
                                                            <img src="assets/images/img_9806.jpg" alt="">
                                                            <span>
																		<strong> Cheksiz internet trafigi <svg
                                                                                width="40" height="40"
                                                                                viewbox="0 0 40 40" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
																				<rect width="40" height="40" rx="20"
                                                                                      transform="matrix(-1 0 0 1 40 0)"
                                                                                      fill="#F2F3F7"></rect>
																				<path
                                                                                    d="M11.6567 20.7817C11.0354 20.7817 10.5317 20.2781 10.5317 19.6567C10.5317 19.0354 11.0354 18.5317 11.6567 18.5317V20.7817ZM28.4522 18.8612C28.8916 19.3006 28.8916 20.0129 28.4522 20.4522L21.2928 27.6117C20.8534 28.051 20.1411 28.051 19.7018 27.6117C19.2624 27.1723 19.2624 26.46 19.7018 26.0207L26.0657 19.6567L19.7018 13.2928C19.2624 12.8534 19.2624 12.1411 19.7018 11.7018C20.1411 11.2624 20.8534 11.2624 21.2928 11.7018L28.4522 18.8612ZM11.6567 18.5317H27.6567V20.7817H11.6567V18.5317Z"
                                                                                    fill="black"></path>
																			</svg>
																		</strong>
																		<p>5G SA bilan cheksiz trafik</p>
																	</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Mobil aloqa</a>
                                    <div class="new-header__menu-dropdown">
                                        <div class="new-header__menu-dropdown-wrapper">
                                            <div
                                                class="new-header__menu-dropdown-item new-header__menu-dropdown-item--type-1">
                                                <ul>
                                                    <li class="">
                                                        <a href="tariffs.html">
                                                            <img src="assets/images/menu-icon-1.svg"
                                                                 alt="">Tariflar </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="static-pages/zona-pokrytiya-1.html">
                                                            <img src="assets/images/menu-icon-2.svg" alt="">
                                                            Qamrov xaritasi </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="new-header__menu-dropdown-item new-header__menu-dropdown-item--type-2">
                                                <ul>
                                                    <li class="">
                                                        <a href="services.html">
                                                            <img src="assets/images/menu-icon-3.svg"
                                                                 alt="">Xizmatlar </a>
                                                    </li>
                                                    <li>
                                                        <a href="device/brands.html">
                                                            <img src="assets/images/menu-icon-4.svg"
                                                                 alt="">Uskunalar katalogi </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="actions.html">
                                                            <img src="assets/images/menu-icon-5.svg"
                                                                 alt="">Aksiyalar </a>
                                                    </li>
                                                    <li>
                                                        <a href="additionals/available_numbers.html">
                                                            <img src="assets/images/menu-icon-6.svg"
                                                                 alt="">Boʻsh raqamlar </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="additionals/faq.html">
                                                            <img src="assets/images/menu-icon-7.svg" alt="">FAQ
                                                        </a>
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
                    </div>
                    <div class="new-header__right">
                        <div class="new-header__burger" id="burger-menu">
                            <span class="burger-line burger-line-1"></span>
                            <span class="burger-line burger-line-2"></span>
                            <span class="burger-line burger-line-3"></span>
                        </div>
                        <div class="new-header__buttons">
                            <ul>
                                <li>
                                    <a class="gazButton " href="https://lk.perfectum.uz/ru/login"
                                       target="_blank">
                                        <x-icon.user/> Shaxsiy kabinet
                                    </a>
                                </li>
                                <li>
                                    <a class="gazButton gazButton--red"
                                       href="static-pages/kak-podklyucitsya.html">Ulanish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

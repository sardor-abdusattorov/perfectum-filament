@php
use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->meta_description)

@section('content')
    <!-- COVERAGE HERO -->
    <section class="coverage-hero">
        <div class="container coverage-hero__container">
            <div class="row coverage-hero__row">
                <div class="col-12 coverage-hero__col">
                    <div class="coverage-hero__teaser">
                        <nav class="breadcrumbs">
                            <ul class="breadcrumbs__ul">
                                <li class="breadcrumbs__item">
                                    <a href="index.htm" class="breadcrumbs__link">Главная</a>
                                </li>
                                <li>
                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 13.5L11.25 9L6.75 4.5" fill="#3E3E3E"></path>
                                        <path d="M6.75 13.5L11.25 9L6.75 4.5" stroke="white" stroke-width="1.33"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </li>
                                <li class="breadcrumbs__item">
                                    <a href="#!" class="breadcrumbs__link">5G Standalone</a>
                                </li>
                            </ul>
                        </nav>
                        <h1>5G Standalone
                            <p>
                            <p>Будущее начинается здесь</p>
                        </h1>
                    </div>
                    <img src="assets/images/JoJuLTYiTYWyyZkayD0pZ1NJ2S4CORBOZJexdIOV.png" alt=""
                         class="coverage-hero__image">
                </div>
            </div>
        </div>
    </section>

    <!-- COVERAGE AREA -->
    <section class="coverage-area">
        <div class="coverage-area__title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Qamrov xaritasi</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="coverage-area__map">
            <div class="container">
                <div class="row coverage-area__map-row">
                    <div class="col-12">
                        <div class="coverage-area__controls">
                            <div class="coverage-area__city-select">
                                <select id="city-select"></select>
                                <a href="#" class="coverage-area__search-button">
                                    <svg class="search-icon" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.62565 2.66683C5.33495 2.66683 2.66732 5.33446 2.66732 8.62516C2.66732 11.9158 5.33495 14.5835 8.62565 14.5835C11.9163 14.5835 14.584 11.9158 14.584 8.62516C14.584 5.33447 11.9163 2.66683 8.62565 2.66683ZM0.833984 8.62516C0.833984 4.32194 4.32243 0.833496 8.62565 0.833496C12.9288 0.833496 16.4173 4.32194 16.4173 8.62516C16.4173 10.4496 15.7902 12.1277 14.7398 13.4554L18.8979 17.601C19.2564 17.9585 19.2572 18.5389 18.8998 18.8974C18.5424 19.2559 17.962 19.2568 17.6034 18.8993L13.442 14.7503C12.1164 15.7941 10.4437 16.4168 8.62565 16.4168C4.32242 16.4168 0.833984 12.9283 0.833984 8.62516Z"
                                              fill="#3E3E3E" />
                                    </svg>
                                    <svg class="close-icon" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <path
                                            d="M15.8334 5.34175L14.6584 4.16675L10.0001 8.82508L5.34175 4.16675L4.16675 5.34175L8.82508 10.0001L4.16675 14.6584L5.34175 15.8334L10.0001 11.1751L14.6584 15.8334L15.8334 14.6584L11.1751 10.0001L15.8334 5.34175Z"
                                            fill="#3E3E3E" />
                                    </svg>
                                </a>
                                <div class="coverage-area__search">
                                    <input type="text" id="map-search"
                                           placeholder="Qidirish uchun manzilni kiriting">
                                    <button id="search-button">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M8.62565 2.66683C5.33495 2.66683 2.66732 5.33446 2.66732 8.62516C2.66732 11.9158 5.33495 14.5835 8.62565 14.5835C11.9163 14.5835 14.584 11.9158 14.584 8.62516C14.584 5.33447 11.9163 2.66683 8.62565 2.66683ZM0.833984 8.62516C0.833984 4.32194 4.32243 0.833496 8.62565 0.833496C12.9288 0.833496 16.4173 4.32194 16.4173 8.62516C16.4173 10.4496 15.7902 12.1277 14.7398 13.4554L18.8979 17.601C19.2564 17.9585 19.2572 18.5389 18.8998 18.8974C18.5424 19.2559 17.962 19.2568 17.6034 18.8993L13.442 14.7503C12.1164 15.7941 10.4437 16.4168 8.62565 16.4168C4.32242 16.4168 0.833984 12.9283 0.833984 8.62516Z"
                                                  fill="#fff" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="coverage-area__network-type">
                                <div class="network-options" id="network-options"></div>
                            </div>
                        </div>
                        <div id="map" class="map__wrapper"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="coverage-area__description">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS FAQ -->
    <section class="new-faq">
        <div class="container new-faq__container">
            <div class="new-faq__title">
                <h3>
                    Часто задаваемые вопросы:
                </h3>
            </div>
            <div class="new-faq__lists">
                <div class="row new-faq__row">
                    <div class="col-12 new-faq__col">
                        <ul>
                            <li>
                                <a href="#">
                                    Что такое 5G Standalone?
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="#3E3E3E" stroke-width="1.33"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="answer">
                                    <p>
                                    <p>5G Standalone — это полноценная сеть пятого поколения, не зависящая
                                        от
                                        предыдущих поколений связи. Она обеспечивает сверхбыстрый интернет,
                                        минимальную задержку и стабильную работу даже при высокой нагрузке.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    Как найти свой район на карте покрытия?
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="#3E3E3E" stroke-width="1.33"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="answer">
                                    <p>
                                    <p>Вы можете вручную найти свой район на карте или воспользоваться
                                        строкой
                                        поиска, указав название района.<br>Например: <i>Мирзо-Улугбекский
                                            район</i></p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    Когда 5G Standalone появится в моем районе?
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="#3E3E3E" stroke-width="1.33"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="answer">
                                    <p>
                                    <p>Мы ежедневно подключаем новые базовые станции 5G Standalone. В
                                        течение
                                        2025 года планируется покрытие всего Ташкента и крупных городов
                                        Узбекистана. Следите за обновлениями на нашем сайте и в соцсетях.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    Как подключить 5G Standalone?
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="#3E3E3E" stroke-width="1.33"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="answer">
                                    <p>
                                    <p><strong>Вариант 1: Онлайн-заявка</strong><br><span
                                            style="background-color:rgb(255,255,255);color:rgb(65,65,65);">•
												</span>Оставьте заявку на сайте.<br><span
                                            style="background-color:rgb(255,255,255);color:rgb(65,65,65);">•
												</span>Мы свяжемся с вами, проверим техническую возможность
                                        подключения
                                        и договоримся о времени установки.<br><span
                                            style="background-color:rgb(255,255,255);color:rgb(65,65,65);">•
												</span>В указанное время наш специалист приедет, привезёт
                                        оборудование
                                        (роутер и SIM-карту Perfectum), подключит и настроит домашний
                                        интернет.
                                    </p>
                                    <p><br><strong>Вариант 2: Посетите офисы Perfectum</strong><br><span
                                            style="background-color:rgb(255,255,255);color:rgb(65,65,65);">•
												</span>Центральный офис: ул. Шевченко, 21<br><span
                                            style="background-color:rgb(255,255,255);color:rgb(65,65,65);">•
												</span>Филиал в&nbsp;Чиланзарском районе: ул. Гагарина, дом 40</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- MAIN NEWS -->
    <section class="main-news mb-5">
        <div class="container main-news__container">
            <div class="row main-news__row">
                <div class="col-12 main-news__col">
                    <div class="main-news__wrap">
                        <div class="main-news__title">
                            <h2>Yangiliklar</h2>
                            <div class="main-news__buttons">
                                <a class="main-news__button main-news__button-prev" href="#">
                                    <svg width="10" height="18" viewbox="0 0 10 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.704405 8.2045C0.265065 8.64384 0.265065 9.35616 0.704405 9.7955L7.86386 16.955C8.3032 17.3943 9.01551 17.3943 9.45485 16.955C9.89419 16.5156 9.89419 15.8033 9.45485 15.364L3.09089 9L9.45485 2.63604C9.89419 2.1967 9.89419 1.48439 9.45485 1.04505C9.01551 0.605708 8.3032 0.605708 7.86386 1.04505L0.704405 8.2045ZM1.5 7.875L1.4999 7.875L1.4999 10.125L1.5 10.125L1.5 7.875Z"
                                            fill="black">
                                        </path>
                                    </svg>
                                </a>
                                <a class="main-news__button main-news__button-next" href="#">
                                    <svg width="10" height="18" viewbox="0 0 10 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.2956 8.2045C9.73493 8.64384 9.73493 9.35616 9.2956 9.7955L2.13614 16.955C1.6968 17.3943 0.984488 17.3943 0.545148 16.955C0.105809 16.5156 0.105809 15.8033 0.545148 15.364L6.90911 9L0.545149 2.63604C0.10581 2.1967 0.10581 1.48439 0.54515 1.04505C0.984489 0.605708 1.6968 0.605708 2.13614 1.04505L9.2956 8.2045ZM8.5 7.875L8.5001 7.875L8.5001 10.125L8.5 10.125L8.5 7.875Z"
                                            fill="black">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="main-news__lists">
                            <div class="main-news__list swiper">
                                <div class="swiper-wrapper">
                                    <div class="main-news__item swiper-slide">
                                        <a href="#">
                                            <h3>
                                                SMS-xabarnoma (№102, OʻzR IIV «Xavfsiz shahar» markazi)
                                            </h3>
                                            <p>
                                                “Mening inspektorim” mobil ilovasida roʻyxatdan oʻtishda
                                                mijozlar uchun 102 qisqa xizmat raqami orqali SMS-xabardor
                                                qilish xizmati. Mobil ilova profilaktika inspektorlari va
                                                mahalla aholisi oʻrtasidagi oʻzaro hamkorlikni yoʻlga qoʻyish
                                                uchun moʻljallangan.
                                            </p>
                                            <ul>
                                                <li>1 Aprel, 2026</li>
                                            </ul>
                                        </a>
                                    </div>
                                    <div class="main-news__item swiper-slide">
                                        <a href="#">
                                            <h3>
                                                SMS-xabarnoma (№6079, Davlat muassasasi «Raqamli hukumat
                                                loyihalarini boshqarish markazi»)
                                            </h3>
                                            <p>
                                                №6079 amaldagi raqam orqali qo`shimcha SMS-xizmati taqdim
                                                etiladi:
                                                O‘zbekiston Respublikasi Sport Vazirligi /Министерство спорта
                                                РУз.
                                                Guvohnoma shakllantirilgani haqida xabarnoma/Вариант входящего
                                                SMS-сообщения:
                                                Sizga {yo'riqchi_uslubchi} toifasi shakllantirildi.
                                                {invoysnumber} invoys orqali to'lovni amalga oshirib,
                                                my.sport.uz dan Guvohnomani yuklab olishingiz mumkinВариант
                                                SMS-сообщений системы my.mehnat.uz:

                                                Amaldagi xizmatga yangi servis qo‘shildi: «Idoralararo
                                                apparat-dasturiy kompleksni boshqarish direksiyasi — Yagona
                                                milliy mehnat tizimi (tizimlardan bildirishnomalar:
                                                my.mehnat.uz, osonish.uz, abkm.mehnat.uz, ish.mehnat.uz,
                                                sertifikat.mehnat.uz, “Mening ishim” mobil ilovasi)»:
                                                • YaMMT_IDAK / (YaMMT - Yagona milliy mehnat tizimi, IDAK -
                                                Identifikatsiya raqami (yoki kodi), Идентификационный код в
                                                Единой национальной системе труда).

                                                Narxi: 0 so'm/kiruvchi SMS
                                                Xizmatlarning to'liq ro'yxati bu erda.
                                            </p>
                                            <ul>
                                                <li>31 Mart 2026</li>
                                            </ul>
                                        </a>
                                    </div>
                                    <div class="main-news__item swiper-slide">
                                        <a href="#">
                                            <h3>
                                                Asl 5G Standalone qamrovi kengaytirildi
                                            </h3>
                                            <p>
                                                Zamonaviy uy interneti — 5G Standalone qamrov hududini faol
                                                kengaytirishda davom etmoqdamiz!O‘tgan h...
                                            </p>
                                            <ul>
                                                <li>30 Mart 2026</li>
                                            </ul>
                                        </a>
                                    </div>
                                    <div class="main-news__item main-news__item--button swiper-slide">
                                        <a href="#">
													<span>
														<svg width="10" height="18" viewbox="0 0 10 18" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path
                                                                d="M9.2956 8.2045C9.73493 8.64384 9.73493 9.35616 9.2956 9.7955L2.13614 16.955C1.6968 17.3943 0.984488 17.3943 0.545148 16.955C0.105809 16.5156 0.105809 15.8033 0.545148 15.364L6.90911 9L0.545149 2.63604C0.10581 2.1967 0.10581 1.48439 0.54515 1.04505C0.984489 0.605708 1.6968 0.605708 2.13614 1.04505L9.2956 8.2045ZM8.5 7.875L8.5001 7.875L8.5001 10.125L8.5 10.125L8.5 7.875Z"
                                                                fill="black"></path>
														</svg>
													</span>
                                            <p>Barcha yangiliklarga</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="main-news__buttons-mobile">
                            <a href="#">
										<span>
											<svg width="10" height="18" viewbox="0 0 10 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
												<path
                                                    d="M9.2956 8.2045C9.73493 8.64384 9.73493 9.35616 9.2956 9.7955L2.13614 16.955C1.6968 17.3943 0.984488 17.3943 0.545148 16.955C0.105809 16.5156 0.105809 15.8033 0.545148 15.364L6.90911 9L0.545149 2.63604C0.10581 2.1967 0.10581 1.48439 0.54515 1.04505C0.984489 0.605708 1.6968 0.605708 2.13614 1.04505L9.2956 8.2045ZM8.5 7.875L8.5001 7.875L8.5001 10.125L8.5 10.125L8.5 7.875Z"
                                                    fill="black"></path>
											</svg>
										</span>
                                <p>Barcha yangiliklarga</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')

    <div class="section__secondary section-bg">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title]]" />

            <div class="section__top-secondary section__top-flex">
                <h2 class="block__title">
                    Новости
                </h2>
                <div class="section__top-secondary--details">
                    <div class="dropdown custom__dropdown"><button type="button" id="dropdownMenuButton"
                                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                                   class="btn dropdown-toggle">
                            2026
                        </button>
                        <div aria-labelledby="dropdownMenuButton" class="dropdown-menu"><a href="#"
                                                                                           class="dropdown-item">2020</a> <a href="#" class="dropdown-item">2021</a> <a
                                href="#" class="dropdown-item">2022</a> <a href="#"
                                                                           class="dropdown-item">2023</a> <a href="#" class="dropdown-item">2024</a></div>
                    </div>
                    <div class="dropdown custom__dropdown"><button type="button" id="dropdownMenuButton2"
                                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                                   class="btn dropdown-toggle">
                            Апрель
                        </button>
                        <div aria-labelledby="dropdownMenuButton2" class="dropdown-menu"><a href="#"
                                                                                            class="dropdown-item">Январь</a> <a href="#" class="dropdown-item">Февраль</a>
                            <a href="#" class="dropdown-item">Март</a> <a href="#"
                                                                          class="dropdown-item">Апрель</a> <a href="#" class="dropdown-item">Май</a> <a
                                href="#" class="dropdown-item">Июнь</a> <a href="#"
                                                                           class="dropdown-item">Июль</a> <a href="#" class="dropdown-item">Август</a> <a
                                href="#" class="dropdown-item">Сентябрь</a> <a href="#"
                                                                               class="dropdown-item">Октябрь</a> <a href="#" class="dropdown-item">Ноябрь</a>
                            <a href="#" class="dropdown-item">Декабрь</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__grid">
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">2 апреля 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            Новая IVR-услуга (№0 800 120 3333‚ СП ООО «IST TELEKOM»)
                        </h3>
                        <h4 class="card__subtitle">
                            IVR-услуга
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">1 апреля 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            SMS-информирование (№102, ГУ ЦРС «Безопасный город» МВД РУз)
                        </h3>
                        <h4 class="card__subtitle">
                            SMS-информирование
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">31 марта 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            SMS-информирование (№6079, ГУ «Центр управления проектами цифрового правительства»)
                        </h3>
                        <h4 class="card__subtitle">
                            SMS-информирование
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">30 марта 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            Расширено покрытие настоящего 5G Standalone
                        </h3>
                        <h4 class="card__subtitle">
                            5G Standalone
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">30 марта 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            SMS-информирование (№22700‚ OOO «AURUM STELLA 05»)
                        </h3>
                        <h4 class="card__subtitle">
                            SMS-информирование
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">19 марта 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            Вывод и приостановление сервисных номеров (№№5900, 8887, 9500, ООО «Play mobile»)
                        </h3>
                        <h4 class="card__subtitle">
                            Прекращение предоставления услуг SMS-информирования
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">18 марта 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            Режим работы
                        </h3>
                        <h4 class="card__subtitle">
                            Режим работы
                        </h4>
                    </div>
                </a>
                <a href="#" class="card pa-0">
                    <div class="card__content pa-20"><span class="card__date">17 марта 2026 г.</span>
                        <h3 class="card__title mb-10" style="font-weight: 600;">
                            Временное приостановление оказания услуг (№2702, ООО «QQM IT SOLUTIONS»)
                        </h3>
                        <h4 class="card__subtitle">
                            Временное приостановление оказания услуг
                        </h4>
                    </div>
                </a>

            </div>
            <div class="section__bottom">
                <div class="pagination">
                    <ul data-v-82963a40="" class="pagination__wrap">
                        <li class="pagination__item active">
                            <a d class="pagination__link">1</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

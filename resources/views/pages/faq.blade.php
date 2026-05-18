@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')
    <div class="section__secondary ">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title ?: __('app.page_settings.faq')]]" />

            <div class="content__holder">
                <div class="content__sidebar">
                    <h3 class="content__sidebar-title">
                        Помощь
                    </h3>
                    <ul class="content__sidebar-wrap">
                        <li class="content__sidebar-item"><a href="#" class="content__sidebar-link">Часто
                                задаваемые вопросы</a></li>
                        <li class="content__sidebar-item"><a href="#" class="content__sidebar-link">Свободные
                                номера</a></li>
                        <li class="content__sidebar-item active"><a href="#" class="content__sidebar-link">Связь
                                с нами</a></li>
                    </ul>
                </div>
                <div class="content__main">
                    <div class="block__wrap ml-0">
                        <div tabindex="0" aria-label="Loading" class="vld-overlay is-active"
                             style="display: none;">
                            <div class="vld-background" style="backdrop-filter: blur(2px);"></div>
                            <div class="vld-icon"><svg viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"
                                                       width="50" height="50" stroke="#d23e02">
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)" stroke-width="2">
                                            <circle stroke-opacity=".25" cx="18" cy="18" r="18"></circle>
                                            <path d="M36 18c0-9.94-8.06-18-18-18">
                                                <animateTransform attributeName="transform" type="rotate"
                                                                  from="0 18 18" to="360 18 18" dur="0.8s"
                                                                  repeatCount="indefinite"></animateTransform>
                                            </path>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <h3 class="content__main-title">
                            Связь с нами
                        </h3>
                        <div class="contact-us__wrap">
                            <div class="form__group"><label>
                                    Как Вас зовут?
                                </label>
                                <div class="input__group"><input placeholder="Имя" type="text"
                                                                 class="base-input"></div>
                            </div>
                            <div class="form__group"><label>
                                    Номер телефона
                                </label>
                                <div class="input__group"><input type="text" placeholder="+998 (93) 899-01-01"
                                                                 class="base-input phone-musk" inputmode="text"></div>
                            </div>
                        </div>
                        <div class="form__group mb-12"><label>
                                Сообщение
                            </label> <textarea rows="5" placeholder="Введите текст..." class=""></textarea>
                        </div>
                        <p class="mb-20" style="font-weight: 500;">
                            Символов осталось:
                            <span class="color-main">139</span>
                        </p>
                        <div class="contact-us__bottom"><button class="main-btn submit-btn ml-0">
                                Отправить
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vue-notification-group" style="width: 500px; top: 0px; right: 0px;"><span></span></div>
    </div>
@endsection

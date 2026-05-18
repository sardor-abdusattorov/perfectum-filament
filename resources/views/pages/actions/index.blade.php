@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->meta_description)

@section('content')
    <div class="section__secondary section-bg">
        <div class="my-container">
            <div class="section__top-secondary">
                <h2 class="block__title">
                    Акции
                </h2>
            </div>

            <div class="section__grid">
                <a href="#" class="card pa-0">
                    <div class="card__photo"
                         style="border-bottom-left-radius: 0!important; border-bottom-right-radius: 0!important;">
                        <img src="assets/images/nYzPLBnKr2G0bfNoWAYSG0aYnocS5UTCIOzstQS3.png" alt="">
                    </div>

                    <div class="card__content pa-20">
                                <span class="card__date">
12 мая, 2022
</span>

                        <h3 class="card__title mb-10" style="font-weight: 700">
                            &quot;1+1&quot;
                        </h3>

                        <h4 class="card__subtitle">
                            Интернет - пакент = Ночной бонус!
                        </h4>
                    </div>

                </a>
                <a href="actions-show/internet-bonus.html" class="card pa-0">
                    <div class="card__photo"
                         style="border-bottom-left-radius: 0!important; border-bottom-right-radius: 0!important;">
                        <img src="assets/images/TsTRtX8RKL1jDRHSykeAa8lufWhqt0fQxuDsua11.png" alt="">
                    </div>

                    <div class="card__content pa-20">
                                <span class="card__date">
12 мая, 2022
</span>

                        <h3 class="card__title mb-10" style="font-weight: 700">
                            &quot;Internet bonus&quot;
                        </h3>

                        <h4 class="card__subtitle">
                            Акция
                        </h4>
                    </div>

                </a>
                <a href="actions-show/akciya-skidki-na-nomera-do-90.html" class="card pa-0">
                    <div class="card__photo"
                         style="border-bottom-left-radius: 0!important; border-bottom-right-radius: 0!important;">
                        <img src="assets/images/Qmz4Akmfc8EPDxmGXCdl7P5ho4j0evbgxHoVRw0h.jpg" alt="">
                    </div>

                    <div class="card__content pa-20">
                                <span class="card__date">
1 декабря, 2024
</span>

                        <h3 class="card__title mb-10" style="font-weight: 700">
                            Акция «Скидки на номера - до 90%!»
                        </h3>

                        <h4 class="card__subtitle">
                            Акция
                        </h4>
                    </div>

                </a>
            </div>

            <div class="section__bottom">

                <div class="pagination">

                </div>

            </div>

        </div>
    </div>
@endsection




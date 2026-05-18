@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')
    <div class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title ?: __('app.page_settings.faq')]]" />

            <div class="content__holder">
                <x-help-sidebar active="faq"/>

                <div class="content__main">
                    <div class="content__main-title">
                        <i aria-hidden="true" class="fa fa-angle-left color-main mr-2 font-weight-bold"></i>
                        {{ $page?->title ?: __('app.page_settings.faq') }}
                    </div>

                    @if ($faqs->isNotEmpty())
                        <ul id="accordion-faq" class="accordion services__accordion">
                            @foreach ($faqs as $index => $faq)
                                <li class="accordion__list{{ $index === 0 ? ' open' : '' }}">
                                    <div class="link">
                                        <span class="link__title" style="font-size: 18px;">{{ $faq->question }}</span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <div class="accordion__content"@if ($index === 0) style="display: block;"@endif>
                                        <div class="content__text">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>{{ __('app.label.empty') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('#accordion-faq .accordion__list .link').forEach(function (link) {
            link.addEventListener('click', function () {
                var item = link.parentElement;
                var content = item.querySelector('.accordion__content');
                var isOpen = item.classList.toggle('open');
                content.style.display = isOpen ? 'block' : '';
            });
        });
    </script>
@endsection

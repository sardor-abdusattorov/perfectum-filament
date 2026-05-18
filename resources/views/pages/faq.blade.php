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
                    <div class="block__wrap ml-0">
                        <h3 class="content__main-title">
                            {{ $page?->title ?: __('app.page_settings.faq') }}
                        </h3>

                        @if ($page?->description)
                            <div class="content__text mb-24">
                                {!! $page->description !!}
                            </div>
                        @endif

                        @if ($faqs->isNotEmpty())
                            <ul class="accordion services__accordion">
                                @foreach ($faqs as $faq)
                                    <li class="accordion__list">
                                        <details>
                                            <summary class="link">
                                                <span class="link__title">{{ $faq->question }}</span>
                                            </summary>
                                            <div class="accordion__content">
                                                <div class="content__text">
                                                    {!! $faq->answer !!}
                                                </div>
                                            </div>
                                        </details>
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
    </div>
@endsection

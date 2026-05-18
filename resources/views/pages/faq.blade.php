@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')
    <div class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title]]" />

            <div class="content__holder">
                <x-help-sidebar active="faq"/>

                <div class="content__main">
                    <div class="content__main-title">
                        {{ $page?->title }}
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
@endsection

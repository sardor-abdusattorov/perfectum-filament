@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->description)

@section('content')

    <div class="section__secondary section-bg">
        <div class="my-container">

            <nav class="breadcrumbs"><ul class="breadcrumbs__ul"><li class="breadcrumbs__item"><a href="#!" class="breadcrumbs__link">Главная</a></li> <li class="breadcrumbs__item"><a href="#!" class="breadcrumbs__link">Часто задаваемые вопросы</a></li></ul></nav>

            <div class="section__top-secondary section__top-flex">
                <h2 class="block__title">
                    {{ translator('app', 'careers_title') }}
                </h2>
            </div>
            <div class="section__grid">
                @forelse ($careers as $career)
                    <a href="{{ route('careers.show', $career->slug) }}" class="card pa-0">
                        <div class="card__content pa-20">
                            <h3 class="card__title mb-10">
                                {{ $career->title }}
                            </h3>
                            <h4 class="card__subtitle">{{ $career->description }}</h4>
                        </div>
                    </a>
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

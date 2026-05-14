@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->description)

@section('content')

    <div class="section__secondary section-bg">
        <div class="my-container">
            <div class="section__top-secondary section__top-flex">
                <h2 class="block__title">
                    {{ $page?->title }}
                </h2>
            </div>
            <div class="section__grid">
                @forelse ($careers as $career)
                    <a href="{{ $career->url }}">
                        <div class="card__content pa-20">
                            <h3 class="card__title mb-10" style="font-weight: 600">
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

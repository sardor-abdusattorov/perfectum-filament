@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->description)

@section('content')

    <div class="section__secondary section-bg">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title]]" />

            <div class="section__top-secondary section__top-flex">
                <h2 class="block__title">
                    {{ $page?->title }}
                </h2>
            </div>
            <div class="section__grid">
                @forelse ($tenders as $tender)
                    <a href="{{ route('tenders.show', $tender->slug) }}" class="card pa-0">
                        <div class="card__content pa-20">
                            <h3 class="card__title mb-10">
                                {{ $tender->title }}
                            </h3>
                            <h4 class="card__subtitle">{{ $tender->description }}</h4>
                        </div>
                    </a>
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

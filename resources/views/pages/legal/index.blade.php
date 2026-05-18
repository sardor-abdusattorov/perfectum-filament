@extends('layouts.primary')

@section('title', $page?->meta_title)
@section('meta_description', $page?->meta_description)

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
                @forelse ($documents as $document)
                    <a href="{{ route('legal.show', $document->slug) }}" class="card pa-0">
                        <div class="card__content pa-20">
                            <h3 class="card__title mb-10">
                                {{ $document->title }}
                            </h3>
                            <h4 class="card__subtitle">{{ $document?->description }}</h4>
                        </div>
                    </a>
                @empty
                    <p>{{ translator('app', 'empty') }}</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

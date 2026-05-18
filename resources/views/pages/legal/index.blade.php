@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')
    <div class="section__secondary section-bg">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title ?: __('app.label.legal_documents_plural')]]" />

            <div class="section__top-secondary section__top-flex">
                <h2 class="block__title">
                    {{ $page?->title ?: __('app.label.legal_documents_plural') }}
                </h2>

                @if ($page?->description)
                    <div class="content__text mb-24">
                        {!! $page->description !!}
                    </div>
                @endif
            </div>

            <div class="section__grid">
                @forelse ($documents as $document)
                    <a href="{{ route('legal.show', $document->slug) }}" class="card pa-0">
                        <div class="card__content pa-20">
                            <h3 class="card__title mb-10">
                                {{ $document->title }}
                            </h3>
                            @if ($document->description)
                                <h4 class="card__subtitle">{{ $document->description }}</h4>
                            @endif
                        </div>
                    </a>
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')

    <div class="section__secondary section-bg">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title]]" />

            <div class="section__top-secondary section__top-flex">
                <h2 class="block__title">
                    {{ $page?->title }}
                </h2>

                @if ($page?->description)
                    {!! $page->description !!}
                @endif
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

            @if ($tenders->hasPages())
                <div class="section__bottom">
                    <div class="pagination">
                        <ul class="pagination__wrap">
                            @if (! $tenders->onFirstPage())
                                <li class="pagination__item">
                                    <a href="{{ $tenders->previousPageUrl() }}" class="pagination__link" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            @foreach ($tenders->getUrlRange(max(1, $tenders->currentPage() - 2), min($tenders->lastPage(), $tenders->currentPage() + 2)) as $page => $url)
                                <li class="pagination__item {{ $page === $tenders->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($tenders->hasMorePages())
                                <li class="pagination__item">
                                    <a href="{{ $tenders->nextPageUrl() }}" class="pagination__link" rel="next">&raquo;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

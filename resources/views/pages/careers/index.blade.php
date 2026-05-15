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
                    <h2 class="block__title">{{ translator('app', 'empty') }}</h2>
                @endforelse
            </div>

            @if ($careers->hasPages())
                <div class="section__bottom">
                    <div class="pagination">
                        <ul class="pagination__wrap">
                            @if (! $careers->onFirstPage())
                                <li class="pagination__item">
                                    <a href="{{ $careers->previousPageUrl() }}" class="pagination__link" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            @foreach ($careers->getUrlRange(max(1, $careers->currentPage() - 2), min($careers->lastPage(), $careers->currentPage() + 2)) as $page => $url)
                                <li class="pagination__item {{ $page === $careers->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($careers->hasMorePages())
                                <li class="pagination__item">
                                    <a href="{{ $careers->nextPageUrl() }}" class="pagination__link" rel="next">&raquo;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')
    <div class="section__secondary section-bg">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title ?: __('app.label.actions_plural')]]" />

            <div class="section__top-secondary">
                <h2 class="block__title">
                    {{ $page?->title ?: __('app.label.actions_plural') }}
                </h2>

                @if ($page?->description)
                    <div class="content__text mb-24">
                        {!! $page->description !!}
                    </div>
                @endif
            </div>

            <div class="section__grid">
                @forelse ($actions as $action)
                    <a href="{{ route('actions.show', $action->slug) }}" class="card pa-0">
                        @if ($action->image)
                            <div class="card__photo" style="border-bottom-left-radius: 0 !important; border-bottom-right-radius: 0 !important;">
                                <img src="{{ Storage::disk('public')->url($action->image) }}" alt="{{ $action->title }}">
                            </div>
                        @endif

                        <div class="card__content pa-20">
                            @if ($action->published_at)
                                <span class="card__date">
                                    {{ $action->published_at->day }}
                                    {{ __('app.months.' . $action->published_at->month) }},
                                    {{ $action->published_at->year }}
                                </span>
                            @endif

                            <h3 class="card__title mb-10" style="font-weight: 700">
                                {{ $action->title }}
                            </h3>

                            @if ($action->description)
                                <h4 class="card__subtitle">
                                    {{ $action->description }}
                                </h4>
                            @endif
                        </div>
                    </a>
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>

            @if ($actions->hasPages())
                <div class="section__bottom">
                    <div class="pagination">
                        <ul class="pagination__wrap">
                            @if (! $actions->onFirstPage())
                                <li class="pagination__item">
                                    <a href="{{ $actions->previousPageUrl() }}" class="pagination__link" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            @foreach ($actions->getUrlRange(max(1, $actions->currentPage() - 2), min($actions->lastPage(), $actions->currentPage() + 2)) as $page => $url)
                                <li class="pagination__item {{ $page === $actions->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($actions->hasMorePages())
                                <li class="pagination__item">
                                    <a href="{{ $actions->nextPageUrl() }}" class="pagination__link" rel="next">&raquo;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

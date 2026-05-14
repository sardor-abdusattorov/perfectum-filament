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
                <div class="section__top-secondary--details">
                    <div class="dropdown custom__dropdown">
                        <button type="button" id="newsYearDropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" class="btn dropdown-toggle">
                            {{ $year ?: __('app.label.all') }}
                        </button>
                        <div aria-labelledby="newsYearDropdown" class="dropdown-menu">
                            <a href="{{ route('news.index') }}"
                               class="dropdown-item {{ $year ? '' : 'active' }}">{{ __('app.label.all') }}</a>
                            @foreach ($years as $availableYear)
                                <a href="{{ route('news.index', ['year' => $availableYear]) }}"
                                   class="dropdown-item {{ (int) $year === $availableYear ? 'active' : '' }}">
                                    {{ $availableYear }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    @if ($year)
                        <div class="dropdown custom__dropdown">
                            <button type="button" id="newsMonthDropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" class="btn dropdown-toggle">
                                {{ $month ? __('app.months.' . $month) : __('app.label.all') }}
                            </button>
                            <div aria-labelledby="newsMonthDropdown" class="dropdown-menu">
                                <a href="{{ route('news.index', ['year' => $year]) }}"
                                   class="dropdown-item {{ $month ? '' : 'active' }}">{{ __('app.label.all') }}</a>
                                @for ($m = 1; $m <= 12; $m++)
                                    <a href="{{ route('news.index', ['year' => $year, 'month' => $m]) }}"
                                       class="dropdown-item {{ (int) $month === $m ? 'active' : '' }}">
                                        {{ __('app.months.' . $m) }}
                                    </a>
                                @endfor
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="section__grid">
                @forelse ($news as $item)
                    <a href="{{ route('news.show', $item->slug) }}" class="card pa-0">
                        <div class="card__content pa-20">
                            @if ($item->published_at)
                                <span class="card__date">
                                    {{ $item->published_at->day }}
                                    {{ __('app.months.' . $item->published_at->month) }}
                                    {{ $item->published_at->year }}
                                </span>
                            @endif
                            <h3 class="card__title mb-10" style="font-weight: 600;">
                                {{ $item->title }}
                            </h3>
                            @if ($item->description)
                                <h4 class="card__subtitle">
                                    {{ $item->description }}
                                </h4>
                            @endif
                        </div>
                    </a>
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>

            @if ($news->hasPages())
                <div class="section__bottom">
                    <div class="pagination">
                        <ul class="pagination__wrap">
                            @if (! $news->onFirstPage())
                                <li class="pagination__item">
                                    <a href="{{ $news->previousPageUrl() }}" class="pagination__link" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            @foreach ($news->getUrlRange(max(1, $news->currentPage() - 2), min($news->lastPage(), $news->currentPage() + 2)) as $page => $url)
                                <li class="pagination__item {{ $page === $news->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($news->hasMorePages())
                                <li class="pagination__item">
                                    <a href="{{ $news->nextPageUrl() }}" class="pagination__link" rel="next">&raquo;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

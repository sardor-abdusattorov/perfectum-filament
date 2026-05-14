@extends('layouts.primary')

@section('title', $news?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $news?->description ?? $page?->meta_description ?? $page?->description)

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[
                ['label' => $page?->title, 'url' => route('news.index')],
                ['label' => $news?->title],
            ]" />

            @if ($news)
                <div class="block__wrap">
                    @if ($news->image)
                        <div class="main__photo mb-20">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($news->image) }}"
                                 alt="{{ $news->title }}">
                        </div>
                    @endif

                    <h2 class="block__title mb-20">{{ $news->title }}</h2>

                    @if ($news->published_at)
                        <span class="card__date">
                            {{ $news->published_at->day }}
                            {{ __('app.months.' . $news->published_at->month) }}
                            {{ $news->published_at->year }}
                        </span>
                    @endif

                    @if ($news->content)
                        <div class="content__text">
                            {!! $news->content !!}
                        </div>
                    @endif
                </div>
            @else
                <p>{{ __('app.label.empty') }}</p>
            @endif
        </div>
    </section>
@endsection

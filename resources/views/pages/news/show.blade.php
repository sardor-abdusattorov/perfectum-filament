@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $news?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $news?->description ?? $page?->meta_description ?? $page?->description)
@section('og_image', $news?->image ? asset(Storage::url($news->image)) : '')

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[
                ['label' => $page?->title, 'url' => route('news.index')],
                ['label' => $news?->title],
            ]" />

            @if ($news)
                <div class="block__wrap">
                    <h2 class="block__title mb-20">{{ $news->title }}</h2>

                    @if ($news->published_at)
                        <h5 class="card__date mb-20">
                            {{ $news->published_at->day }}
                            {{ __('app.months.' . $news->published_at->month) }},
                            {{ $news->published_at->year }}
                        </h5>
                    @endif

                    @if ($news->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($news->image) }}"
                                 alt="{{ $news->title }}">
                        </div>
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

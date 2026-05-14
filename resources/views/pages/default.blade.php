@extends('layouts.primary')

@section('title', $page->meta_title ?: $page->title)
@section('meta_description', $page->meta_description)

@section('content')
    <section class="page">
        <div class="container">
            <h1 class="page__title">{{ $page->title }}</h1>

            @if ($page->image)
                <div class="page__image">
                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($page->image) }}"
                         alt="{{ $page->title }}">
                </div>
            @endif

            @if ($page->content)
                <div class="page__content">
                    {!! $page->content !!}
                </div>
            @endif
        </div>
    </section>
@endsection

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->meta_description)

@section('content')
    <section class="section__secondary">
        <div class="my-container">
            <div class="block__wrap">
                <x-breadcrumbs :items="[['label' => $page?->title]]" />

                <h2 class="block__title mb-20">{{ $page?->title }}</h2>

                @forelse ($texts as $text)
                    @if ($text->title)
                        <h3 class="card__title mb-20">{{ $text->title }}</h3>
                    @endif

                    @if ($text->description)
                        <h5 class="card__description mb-20">{{ $text->description }}</h5>
                    @endif

                    @if ($text->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($text->image) }}"
                                 alt="{{ $text->title }}">
                        </div>
                    @endif

                    @if ($text->content)
                        <div class="content__text mb-20">
                            {!! $text->content !!}
                        </div>
                    @endif
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection

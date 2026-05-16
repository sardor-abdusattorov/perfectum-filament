@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->meta_description)

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title]]" />

            <h2 class="block__title mb-20">{{ $page?->title }}</h2>

            @forelse ($texts as $text)
                <div class="block__wrap mb-20">
                    @if ($text->title)
                        <h3 class="block__subtitle mb-20">{{ $text->title }}</h3>
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
                        <div class="content__text">
                            {!! $text->content !!}
                        </div>
                    @endif
                </div>
            @empty
                <p>{{ __('app.label.empty') }}</p>
            @endforelse
        </div>
    </section>
@endsection

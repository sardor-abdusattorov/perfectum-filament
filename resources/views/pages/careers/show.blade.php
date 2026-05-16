@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $career?->title)
@section('meta_description', $career?->description)
@section('og_image', $career?->image ? asset(Storage::url($career->image)) : '')

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[
                ['label' => $page?->title, 'url' => route('careers.index')],
                ['label' => $career?->title],
            ]" />

            @if ($career)
                <div class="block__wrap">
                    <h2 class="block__title mb-20">{{ $career->title }}</h2>

                    @if ($career->published_at)
                        <h5 class="card__date mb-20">
                            {{ $career->published_at->day }}
                            {{ __('app.months.' . $career->published_at->month) }},
                            {{ $career->published_at->year }}
                        </h5>
                    @endif

                    @if ($career->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($career->image) }}"
                                 alt="{{ $career->title }}">
                        </div>
                    @endif

                    @if ($career->content)
                        <div class="content__text">
                            {!! $career->content !!}
                        </div>
                    @endif

                    @if ($career->files->isNotEmpty())
                        <ul class="list-group">
                            @foreach ($career->files as $file)
                                <a class="mt-3 header__menu-link files_download"
                                   href="{{ Storage::disk('public')->url($file->file) }}"
                                   download>
                                    {{ $file->name }}
                                </a>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @else
                <p>{{ __('app.label.empty') }}</p>
            @endif
        </div>
    </section>
@endsection

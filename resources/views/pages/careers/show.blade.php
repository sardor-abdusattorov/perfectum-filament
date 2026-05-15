@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $career?->title)
@section('meta_description', $career?->description)

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            @if ($career)
                <div class="block__wrap">

                    <x-breadcrumbs :items="[
                        ['label' => $page?->title, 'url' => route('careers.index')],
                        ['label' => $career?->title],
                    ]"/>

                    @if ($career->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($career->image) }}"
                                 alt="{{ $career->title }}">
                        </div>
                    @endif

                    <h5 class="card__date">
                        12 May, 2022
                    </h5>

                    <h2 class="block__title mb-20">{{ $career->title }}</h2>

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

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $action?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $action?->description ?? $page?->meta_description ?? $page?->description)
@section('og_image', $action?->image ? asset(Storage::url($action->image)) : '')

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            @if ($action)
                <div class="block__wrap">

                    <x-breadcrumbs :items="[
                        ['label' => $page?->title ?: __('app.label.actions_plural'), 'url' => route('actions.index')],
                        ['label' => $action?->title],
                    ]" />

                    @if ($action->published_at)
                        <h5 class="card__date mb-20">
                            {{ $action->published_at->day }}
                            {{ __('app.months.' . $action->published_at->month) }},
                            {{ $action->published_at->year }}
                        </h5>
                    @endif

                    <h2 class="block__title mb-10">{{ $action->title }}</h2>

                    @if ($action->description)
                        <h3 class="block__subtitle mb-20">{{ $action->description }}</h3>
                    @endif

                    @if ($action->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($action->image) }}"
                                 alt="{{ $action->title }}">
                        </div>
                    @endif

                    @if ($action->content)
                        <div class="content__text">
                            {!! $action->content !!}
                        </div>
                    @endif

                    @if ($action->files->isNotEmpty())
                        <ul class="list-group mt-4">
                            @foreach ($action->files as $file)
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

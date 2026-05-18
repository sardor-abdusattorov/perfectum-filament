@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $service?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $service?->subtitle ?? $page?->meta_description ?? $page?->description)
@section('og_image', $service?->image ? asset(Storage::url($service->image)) : '')

@section('content')
    <div class="section__secondary">
        <div class="my-container">
            @if ($service)
                <div class="block__wrap">

                    <x-breadcrumbs :items="array_values(array_filter([
                        ['label' => $page?->title ?: __('app.label.services_plural'), 'url' => route('services.index')],
                        $service->category ? [
                            'label' => $service->category->title,
                            'url' => route('services.category', $service->category->slug),
                        ] : null,
                        ['label' => $service->title],
                    ]))" />

                    <h2 class="block__title mb-20">{{ $service->title }}</h2>

                    @if ($service->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($service->image) }}"
                                 alt="{{ $service->title }}">
                        </div>
                    @endif

                    @if ($service->description)
                        <div class="content__text mb-4">
                            {!! $service->description !!}

                            @if ($service->description_comment)
                                <div class="chip">
                                    <p>{{ $service->description_comment }}</p>
                                </div>
                            @endif
                        </div>
                    @endif

                    @if ($service->billing_description)
                        <h3 class="block__subtitle mb-3">
                            {{ __('app.label.billing_description') }}:
                        </h3>
                        <div class="content__text">
                            {!! $service->billing_description !!}

                            @if ($service->billing_description_comment)
                                <div class="chip">
                                    <p>{{ $service->billing_description_comment }}</p>
                                </div>
                            @endif
                        </div>
                    @endif

                    @if ($service->files->isNotEmpty())
                        <ul class="list-group mt-4">
                            @foreach ($service->files as $file)
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
    </div>
@endsection

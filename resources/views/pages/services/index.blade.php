@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->meta_title ?: $page?->title)
@section('meta_description', $page?->meta_description ?: $page?->description)

@section('content')
    <div class="section__secondary section-bg">
        <div class="my-container">

            <x-breadcrumbs :items="[['label' => $page?->title ?: __('app.label.services_plural')]]" />

            <div class="section__top-secondary">
                <h2 class="block__title mb-24">
                    {{ $page?->title ?: __('app.label.services_plural') }}
                </h2>

                <div class="btn__group">
                    @foreach ($categories as $category)
                        <a href="{{ route('services.category', $category->slug) }}"
                           class="secondary-btn {{ $activeCategory && $activeCategory->id === $category->id ? 'active' : '' }}">
                            {{ $category->title }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="services-wrapper">
                @forelse ($services as $service)
                    <a href="{{ route('services.show', [$activeCategory->slug, $service->slug]) }}" class="services-item">
                        <div class="services-item__left">
                            @if ($service->icon)
                                <img src="{{ Storage::disk('public')->url($service->icon) }}" alt="{{ $service->title }}">
                            @endif
                        </div>
                        <div class="services-item__right">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->subtitle }}</p>
                        </div>
                    </a>
                @empty
                    <p>{{ __('app.label.empty') }}</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

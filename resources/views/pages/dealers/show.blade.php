@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $dealer?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $dealer?->description ?? $page?->meta_description ?? $page?->description)
@section('og_image', $dealer?->image ? asset(Storage::url($dealer->image)) : '')

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            @if ($dealer)
                <div class="block__wrap">

                    <x-breadcrumbs :items="[
                        ['label' => $page?->title, 'url' => route('dealers.index')],
                        ['label' => $dealer?->title],
                    ]"/>

                    <h2 class="block__title mb-20">{{ $dealer->title }}</h2>

                    @if ($dealer->image)
                        <div class="main__photo mb-20">
                            <img src="{{ Storage::disk('public')->url($dealer->image) }}"
                                 alt="{{ $dealer->title }}">
                        </div>
                    @endif

                    @if ($dealer->content)
                        <div class="content__text">
                            {!! $dealer->content !!}
                        </div>
                    @endif

                    @if ($dealer->files->isNotEmpty())
                        <ul class="list-group">
                            @foreach ($dealer->files as $file)
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

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page->meta_title ?: $page->title)
@section('meta_description', $page->meta_description)
@section('og_image', $page->image ? asset(Storage::url($page->image)) : '')

@section('content')
    <section class="section__secondary">
        <div class="my-container">
            <div class="block__wrap">

                <x-breadcrumbs :items="[['label' => $page->title]]" />

                <h2 class="block__title mb-20">{{ $page->title }}</h2>

                @if ($page->image)
                    <div class="main__photo mb-20">
                        <img src="{{ Storage::disk('public')->url($page->image) }}"
                             alt="{{ $page->title }}">
                    </div>
                @endif

                @if ($page->content)
                    <div class="content__text">
                        {!! $page->content !!}
                    </div>
                @endif

                @if ($page->files->isNotEmpty())
                    <ul class="list-group mt-4">
                        @foreach ($page->files as $file)
                            <a class="mt-3 header__menu-link files_download"
                               href="{{ Storage::disk('public')->url($file->file) }}"
                               download>
                                {{ $file->name }}
                            </a>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </section>
@endsection

@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $document?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $document?->description ?? $page?->meta_description ?? $page?->description)

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            @if ($document)
                <div class="block__wrap">

                    <x-breadcrumbs :items="[
                        ['label' => $page?->title ?: __('app.label.legal_documents_plural'), 'url' => route('legal.index')],
                        ['label' => $document?->title],
                    ]" />

                    <h2 class="block__title mb-20">{{ $document->title }}</h2>

                    @if ($document->description)
                        <h3 class="block__subtitle mb-20">{{ $document->description }}</h3>
                    @endif

                    @if ($document->content)
                        <div class="content__text">
                            {!! $document->content !!}
                        </div>
                    @endif

                    @if ($document->files->isNotEmpty())
                        <ul class="list-group mt-4">
                            @foreach ($document->files as $file)
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

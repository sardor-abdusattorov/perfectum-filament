@extends('layouts.primary')

@section('title', $tender?->title ?? $page?->meta_title ?? $page?->title)
@section('meta_description', $tender?->description ?? $page?->meta_description ?? $page?->description)
@section('og_image', $tender?->og_image)

@section('content')
    <section class="section__secondary">
        <div class="my-container">

            <x-breadcrumbs :items="[
                ['label' => $page?->title, 'url' => route('tenders.index')],
                ['label' => $tender?->title],
            ]" />

            @if ($tender)
                <div class="block__wrap">
                    @if ($tender->image)
                        <div class="main__photo mb-20">
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($tender->image) }}"
                                 alt="{{ $tender->title }}">
                        </div>
                    @endif

                    <h2 class="block__title mb-20">{{ $tender->title }}</h2>

                    @if ($tender->content)
                        <div class="content__text">
                            {!! $tender->content !!}
                        </div>
                    @endif

                    @if ($tender->files->isNotEmpty())
                        <div class="block__files mt-20">
                            @foreach ($tender->files as $file)
                                <a class="block__file"
                                   href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($file->file) }}"
                                   download>
                                    {{ $file->name }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @else
                <p>{{ __('app.label.empty') }}</p>
            @endif
        </div>
    </section>
@endsection

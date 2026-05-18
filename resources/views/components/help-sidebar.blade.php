@props([
    'active' => null,  // 'faq' | 'free-numbers' | 'contacts'
])

@php
    $links = [
        [
            'key' => 'faq',
            'label' => translator('app.faq') ?: __('app.page_settings.faq'),
            'url' => route('faq'),
        ],
        [
            'key' => 'free-numbers',
            'label' => __('app.page_settings.free_numbers'),
            'url' => '#',
        ],
        [
            'key' => 'contacts',
            'label' => __('app.page_settings.contacts'),
            'url' => route('contacts'),
        ],
    ];
@endphp

<div class="content__sidebar">
    <h3 class="content__sidebar-title">
        {{ translator('app.useful') ?: __('app.page_settings.helpers') }}
    </h3>
    <ul class="content__sidebar-wrap">
        @foreach ($links as $link)
            <li class="content__sidebar-item {{ $active === $link['key'] ? 'active' : '' }}">
                <a href="{{ $link['url'] }}" class="content__sidebar-link">{{ $link['label'] }}</a>
            </li>
        @endforeach
    </ul>
</div>

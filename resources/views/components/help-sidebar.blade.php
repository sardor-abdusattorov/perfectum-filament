@props([
    'active' => null,  // 'faq' | 'free-numbers' | 'contacts'
])

@php
    $links = [
        [
            'key' => 'faq',
            'label' => translator('app.faq'),
            'url' => route('faq'),
        ],
        [
            'key' => 'free-numbers',
            'label' => translator('app.free_numbers'),
            'url' => '#',
        ],
        [
            'key' => 'contacts',
            'label' => translator('app.contacts'),
            'url' => route('contacts'),
        ],
    ];
@endphp

<div class="content__sidebar">
    <h3 class="content__sidebar-title">
        {{ translator('app.useful') }}
    </h3>
    <ul class="content__sidebar-wrap">
        @foreach ($links as $link)
            <li class="content__sidebar-item {{ $active === $link['key'] ? 'active' : '' }}">
                <a href="{{ $link['url'] }}" class="content__sidebar-link">{{ $link['label'] }}</a>
            </li>
        @endforeach
    </ul>
</div>

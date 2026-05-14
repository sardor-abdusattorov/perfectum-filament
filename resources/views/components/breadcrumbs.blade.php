@props(['items' => []])

<nav class="breadcrumbs">
    <ul class="breadcrumbs__ul">
        <li class="breadcrumbs__item">
            <a href="{{ route('home') }}" class="breadcrumbs__link">{{ __('app.label.home') }}</a>
        </li>
        @foreach ($items as $item)
            <li class="breadcrumbs__item">
                @if (! empty($item['url']) && ! $loop->last)
                    <a href="{{ $item['url'] }}" class="breadcrumbs__link">{{ $item['label'] }}</a>
                @else
                    <a class="breadcrumbs__link">{{ $item['label'] }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</nav>

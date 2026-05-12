<?php

use App\Models\SiteTranslation;
use Illuminate\Support\Facades\Cache;

if (! function_exists('translator')) {
    function translator(
        string $category,
        ?string $key = null,
        array $replace = [],
        ?string $locale = null
    ): string {
        $locale ??= app()->getLocale();

        if ($key === null && str_contains($category, '.')) {
            [$category, $key] = explode('.', $category, 2);
        }

        if ($key === null) {
            return $category;
        }

        $cacheKey = "translator.{$category}.{$key}";

        $row = Cache::remember($cacheKey, 86400, fn () => SiteTranslation::query()
            ->where('category', $category)
            ->where('key', $key)
            ->where('is_published', true)
            ->first()
        );

        if (! $row) {
            return $key;
        }

        $value = $row->value;

        if (is_array($value)) {
            $value = $value[$locale] ?? reset($value);
        }

        foreach ($replace as $k => $v) {
            $value = str_replace(':' . $k, (string) $v, (string) $value);
        }

        return (string) $value;
    }
}

if (! function_exists('clear_translator_cache')) {
    function clear_translator_cache(?string $category = null, ?string $key = null): void
    {
        if ($category && $key) {
            Cache::forget("translator.{$category}.{$key}");
            return;
        }

        $query = SiteTranslation::query();

        if ($category) {
            $query->where('category', $category);
        }

        $query->select(['category', 'key'])
            ->get()
            ->each(fn ($row) => Cache::forget("translator.{$row->category}.{$row->key}"));
    }
}

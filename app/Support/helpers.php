<?php

use App\Models\Settings;
use App\Models\SiteSettings;
use App\Models\SiteTranslation;
use Illuminate\Support\Facades\Cache;

if (! function_exists('settings')) {
    function settings(string $key, mixed $default = null): mixed
    {
        return Cache::remember("settings.{$key}", 86400, function () use ($key, $default) {
            $setting = Settings::where('key', $key)->first();

            return $setting?->value ?? $default;
        });
    }
}

if (! function_exists('clear_settings_cache')) {
    function clear_settings_cache(?string $key = null): void
    {
        if ($key !== null) {
            Cache::forget("settings.{$key}");
            return;
        }

        Settings::query()->pluck('key')->each(
            fn (string $k) => Cache::forget("settings.{$k}")
        );
    }
}

if (! function_exists('site_setting')) {
    function site_setting(string $key, mixed $default = null): mixed
    {
        return Cache::remember("site_setting.{$key}", 86400, function () use ($key, $default) {
            $setting = SiteSettings::query()
                ->where('name', $key)
                ->where('is_published', true)
                ->first();

            return $setting?->value ?? $default;
        });
    }
}

if (! function_exists('clear_site_settings_cache')) {
    function clear_site_settings_cache(?string $key = null): void
    {
        if ($key !== null) {
            Cache::forget("site_setting.{$key}");
            return;
        }

        SiteSettings::query()->pluck('name')->each(
            fn (string $name) => Cache::forget("site_setting.{$name}")
        );
    }
}

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

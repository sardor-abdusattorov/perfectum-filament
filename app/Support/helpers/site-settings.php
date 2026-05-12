<?php

use App\Models\SiteSettings;
use Illuminate\Support\Facades\Cache;

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

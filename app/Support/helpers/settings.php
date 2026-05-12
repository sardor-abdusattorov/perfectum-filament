<?php

use App\Models\Settings;
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

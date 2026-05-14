<?php

use App\Enums\PageSettingKey;
use App\Models\PageSetting;

if (! function_exists('page_setting')) {
    function page_setting(PageSettingKey|string $key): ?PageSetting
    {
        return PageSetting::get($key);
    }
}

if (! function_exists('page_setting_title')) {
    function page_setting_title(PageSettingKey|string $key, ?string $default = null): ?string
    {
        return PageSetting::get($key)?->title ?? $default;
    }
}

if (! function_exists('page_setting_description')) {
    function page_setting_description(PageSettingKey|string $key, ?string $default = null): ?string
    {
        return PageSetting::get($key)?->description ?? $default;
    }
}

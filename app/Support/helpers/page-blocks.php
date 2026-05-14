<?php

use App\Enums\PageSettingKey;
use App\Models\PageBlock;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

if (! function_exists('page_blocks')) {
    function page_blocks(PageSettingKey|string $page): Collection
    {
        $key = $page instanceof PageSettingKey ? $page->value : $page;

        return Cache::remember("page_blocks.{$key}", 86400, fn () => PageBlock::query()
            ->where('page', $key)
            ->where('is_published', true)
            ->with('files')
            ->orderBy('sort')
            ->get());
    }
}

if (! function_exists('clear_page_blocks_cache')) {
    function clear_page_blocks_cache(?string $page = null): void
    {
        if ($page !== null) {
            Cache::forget("page_blocks.{$page}");
            return;
        }

        foreach (PageSettingKey::cases() as $case) {
            Cache::forget("page_blocks.{$case->value}");
        }
    }
}

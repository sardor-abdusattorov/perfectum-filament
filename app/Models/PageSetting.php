<?php

namespace App\Models;

use App\Enums\PageSettingKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Translatable\HasTranslations;

class PageSetting extends Model
{
    use HasTranslations;

    protected $table = 'page_settings';

    protected $fillable = ['name', 'title', 'description', 'is_published'];

    public $translatable = ['title', 'description'];

    protected $casts = [
        'name' => PageSettingKey::class,
        'is_published' => 'boolean',
    ];

    protected static function booted(): void
    {
        $forget = fn (self $model) => Cache::forget(
            'page_setting.' . ($model->getOriginal('name') ?: $model->getRawOriginal('name'))
        );

        static::saved($forget);
        static::deleted($forget);
    }

    public static function get(PageSettingKey|string $key): ?self
    {
        $name = $key instanceof PageSettingKey ? $key->value : $key;

        return Cache::remember(
            "page_setting.{$name}",
            86400,
            fn () => static::query()->where('name', $name)->first()
        );
    }
}

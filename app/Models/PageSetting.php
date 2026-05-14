<?php

namespace App\Models;

use App\Enums\PageSettingKey;
use Illuminate\Database\Eloquent\Model;
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

    public static function get(PageSettingKey|string $key): ?self
    {
        $name = $key instanceof PageSettingKey ? $key->value : $key;

        return static::query()->where('name', $name)->first();
    }
}

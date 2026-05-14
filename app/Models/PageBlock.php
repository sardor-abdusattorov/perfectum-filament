<?php

namespace App\Models;

use App\Enums\PageSettingKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;
use Spatie\Translatable\HasTranslations;

class PageBlock extends Model
{
    use HasTranslations;

    protected $table = 'page_blocks';

    protected $fillable = [
        'page',
        'title',
        'description',
        'content',
        'image',
        'sort',
        'is_published',
    ];

    public $translatable = ['title', 'description', 'content'];

    protected $casts = [
        'page' => PageSettingKey::class,
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];

    protected static function booted(): void
    {
        $forget = function (self $model): void {
            foreach ([$model->getOriginal('page'), $model->page] as $page) {
                if ($page) {
                    Cache::forget('page_blocks.' . ($page instanceof PageSettingKey ? $page->value : $page));
                }
            }
        };

        static::saved($forget);
        static::deleted($forget);
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->orderBy('sort');
    }
}

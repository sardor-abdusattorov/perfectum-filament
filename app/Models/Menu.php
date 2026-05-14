<?php

namespace App\Models;

use App\Enums\MenuPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasTranslations;

    protected $table = 'menus';

    protected $fillable = [
        'parent_id',
        'position',
        'footer_column',
        'page_id',
        'url',
        'name',
        'icon',
        'target',
        'sort',
        'is_published',
    ];

    public $translatable = ['name'];

    protected $casts = [
        'position' => MenuPosition::class,
        'footer_column' => 'integer',
        'sort' => 'integer',
        'is_published' => 'boolean',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort');
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function getLinkAttribute(): string
    {
        if ($this->page_id && $this->page) {
            return $this->page->url;
        }

        return (string) $this->url;
    }

    public function getTitleAttribute(): ?string
    {
        $name = $this->getTranslation('name', app()->getLocale(), false);

        if ($name) {
            return $name;
        }

        return $this->page?->getTranslation('title', app()->getLocale(), false);
    }
}

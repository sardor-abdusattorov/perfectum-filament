<?php

namespace App\Models;

use App\Enums\PageSection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\CleansUpAttachedFiles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use CleansUpAttachedFiles, HasTranslations;

    protected $table = 'pages';

    protected $fillable = [
        'parent_id',
        'section',
        'slug',
        'template',
        'title',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'sort',
        'is_published',
    ];

    public $translatable = ['title', 'content', 'meta_title', 'meta_description'];

    protected $casts = [
        'section' => PageSection::class,
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];

    public function getUrlAttribute(): string
    {
        return url("/{$this->section->value}/{$this->slug}");
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort');
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->orderBy('sort');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\CleansUpAttachedFiles;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Tender extends Model
{
    use CleansUpAttachedFiles, HasTranslations;

    protected $table = 'tenders';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'image',
        'published_at',
        'sort',
        'is_published',
    ];

    public $translatable = ['title', 'description', 'content'];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
        'published_at' => 'datetime',
    ];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->orderBy('sort');
    }

    public function getUrlAttribute(): string
    {
        return url("/tenders/{$this->slug}");
    }
}

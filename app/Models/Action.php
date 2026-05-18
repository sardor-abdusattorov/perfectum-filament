<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\CleansUpAttachedFiles;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Action extends Model
{
    use CleansUpAttachedFiles, HasFactory, HasTranslations;

    protected $table = 'actions';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'image',
        'sort',
        'is_published',
        'published_at',
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
        return url("/actions/{$this->slug}");
    }
}

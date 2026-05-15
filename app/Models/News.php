<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasTranslations;

    protected $table = 'news';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'image',
        'is_published',
        'published_at',
    ];

    public $translatable = ['title', 'description', 'content'];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getUrlAttribute(): string
    {
        return url("/news/{$this->slug}");
    }

    public function getOgImageAttribute(): ?string
    {
        return $this->image ? asset(Storage::disk('public')->url($this->image)) : null;
    }
}

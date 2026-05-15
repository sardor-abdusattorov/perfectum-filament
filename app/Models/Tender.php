<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Tender extends Model
{
    use HasTranslations;

    protected $table = 'tenders';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'image',
        'sort',
        'is_published',
    ];

    public $translatable = ['title', 'description', 'content'];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->orderBy('sort');
    }

    public function getUrlAttribute(): string
    {
        return url("/tenders/{$this->slug}");
    }

    public function getOgImageAttribute(): ?string
    {
        return $this->image ? asset(Storage::disk('public')->url($this->image)) : null;
    }
}

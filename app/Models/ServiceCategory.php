<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class ServiceCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'service_categories';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'meta_title',
        'meta_description',
        'sort',
        'is_published',
    ];

    public $translatable = ['title', 'description', 'meta_title', 'meta_description'];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class)->orderBy('sort');
    }

    public function getResolvedMetaTitleAttribute(): string
    {
        return $this->getTranslation('meta_title', app()->getLocale(), false)
            ?: ($this->title.' | Perfectum');
    }

    public function getResolvedMetaDescriptionAttribute(): ?string
    {
        return $this->getTranslation('meta_description', app()->getLocale(), false)
            ?: $this->getTranslation('description', app()->getLocale(), false)
            ?: null;
    }
}

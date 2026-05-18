<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\CleansUpAttachedFiles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use CleansUpAttachedFiles, HasFactory, HasTranslations;

    protected $table = 'services';

    protected $fillable = [
        'service_category_id',
        'slug',
        'title',
        'subtitle',
        'description',
        'description_comment',
        'billing_description',
        'billing_description_comment',
        'image',
        'icon',
        'sort',
        'is_published',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description',
        'description_comment',
        'billing_description',
        'billing_description_comment',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->orderBy('sort');
    }

    public function getUrlAttribute(): string
    {
        return url("/services/{$this->slug}");
    }
}

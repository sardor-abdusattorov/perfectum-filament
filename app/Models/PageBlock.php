<?php

namespace App\Models;

use App\Enums\PageSettingKey;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\CleansUpAttachedFiles;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class PageBlock extends Model
{
    use CleansUpAttachedFiles, HasTranslations;

    protected $table = 'page_blocks';

    protected $fillable = [
        'page',
        'name',
        'title',
        'description',
        'content',
        'image',
        'is_published',
    ];

    public $translatable = ['title', 'description', 'content'];

    protected $casts = [
        'page' => PageSettingKey::class,
        'is_published' => 'boolean',
    ];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->orderBy('sort');
    }
}

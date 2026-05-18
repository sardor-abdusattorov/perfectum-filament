<?php

namespace App\Models;

use App\Enums\PageSettingKey;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageSetting extends Model
{
    use HasTranslations;

    protected $table = 'page_settings';

    protected $fillable = ['name', 'title', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'is_published'];

    public $translatable = ['title', 'description', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $casts = [
        'name' => PageSettingKey::class,
        'is_published' => 'boolean',
    ];
}

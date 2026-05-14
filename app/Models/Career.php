<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Translatable\HasTranslations;

class Career extends Model
{
    use HasTranslations;

    protected $table = 'careers';

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

}

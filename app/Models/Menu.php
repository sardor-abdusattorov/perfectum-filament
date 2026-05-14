<?php

namespace App\Models;

use App\Enums\MenuPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasTranslations;

    protected $table = 'menus';

    protected $fillable = [
        'parent_id',
        'position',
        'footer_column',
        'name',
        'url',
        'icon',
        'target',
        'sort',
        'is_published',
    ];

    public $translatable = ['name'];

    protected $casts = [
        'position' => MenuPosition::class,
        'footer_column' => 'integer',
        'sort' => 'integer',
        'is_published' => 'boolean',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort');
    }
}

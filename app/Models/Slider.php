<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasTranslations;

    protected $table = 'sliders';

    protected $fillable = ['title', 'description', 'button_text', 'main_image', 'link', 'sort', 'is_published'];

    public $translatable = ['title', 'description', 'button_text'];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];
}

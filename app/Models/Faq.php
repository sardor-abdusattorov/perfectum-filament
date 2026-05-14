<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasTranslations;

    protected $table = 'faqs';

    protected $fillable = ['question', 'answer', 'image', 'sort', 'is_published'];

    public $translatable = ['question', 'answer'];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];
}

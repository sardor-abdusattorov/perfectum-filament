<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Dealer extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'dealers';

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
}

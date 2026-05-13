<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socials';

    protected $fillable = ['name', 'url', 'image', 'sort', 'is_published'];

    protected $casts = [
        'is_published' => 'boolean',
        'sort' => 'integer',
    ];
}

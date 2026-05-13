<?php

namespace App\Models;

use App\Enums\FreeNumberFilterType;
use Illuminate\Database\Eloquent\Model;

class FreeNumberFilter extends Model
{
    protected $table = 'free_number_filters';

    protected $fillable = ['name', 'value', 'data_type', 'sort', 'is_published'];

    protected $casts = [
        'data_type'    => FreeNumberFilterType::class,
        'is_published' => 'boolean',
        'sort'         => 'integer',
    ];
}

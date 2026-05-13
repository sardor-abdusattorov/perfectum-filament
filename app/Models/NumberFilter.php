<?php

namespace App\Models;

use App\Enums\NumberFilterType;
use Illuminate\Database\Eloquent\Model;

class NumberFilter extends Model
{
    protected $table = 'number_filters';

    protected $fillable = ['name', 'value', 'data_type', 'sort', 'is_published'];

    protected $casts = [
        'data_type'    => NumberFilterType::class,
        'is_published' => 'boolean',
        'sort'         => 'integer',
    ];
}

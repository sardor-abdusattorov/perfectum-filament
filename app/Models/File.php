<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = ['fileable_type', 'fileable_id', 'name', 'file', 'sort'];

    protected $casts = [
        'sort' => 'integer',
    ];

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}

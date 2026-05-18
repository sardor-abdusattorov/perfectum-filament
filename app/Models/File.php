<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = ['fileable_type', 'fileable_id', 'name', 'file', 'sort'];

    protected $casts = [
        'sort' => 'integer',
    ];

    protected static function booted(): void
    {
        static::deleting(function (File $file) {
            if (! empty($file->file)) {
                Storage::disk('public')->delete($file->file);
            }
        });
    }

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}

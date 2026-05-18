<?php

namespace App\Models\Concerns;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

trait CleansUpAttachedFiles
{
    public static function bootCleansUpAttachedFiles(): void
    {
        static::deleting(function (Model $model) {
            foreach ($model->files as $file) {
                $file->delete();
            }

            if (! empty($model->image)) {
                Storage::disk('public')->delete($model->image);
            }

            if (! empty($model->icon)) {
                Storage::disk('public')->delete($model->icon);
            }
        });
    }
}

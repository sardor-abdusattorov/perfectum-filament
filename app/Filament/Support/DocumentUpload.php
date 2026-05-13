<?php

namespace App\Filament\Support;

use Filament\Forms\Components\FileUpload;

class DocumentUpload
{
    public static function make(string $model, string $field = 'file'): FileUpload
    {
        return FileUpload::make($field)
            ->label('Документ')
            ->disk('public')
            ->directory(fn () => "documents/{$model}/" . now()->format('Y/m'))
            ->visibility('public')
            ->acceptedFileTypes([
                'application/pdf',

                // Word
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',

                // Excel
                'application/vnd.ms-excel',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ])
            ->downloadable()
            ->previewable(false)
            ->nullable();
    }
}

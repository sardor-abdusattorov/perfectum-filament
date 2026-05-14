<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['slug'])) {
            $source = $data['title']['ru'] ?? ($data['title']['uz'] ?? '');

            if ($source !== '') {
                $data['slug'] = mb_substr(Str::slug($source), 0, 64);
            }
        }

        return $data;
    }
}

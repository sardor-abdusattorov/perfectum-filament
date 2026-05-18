<?php

namespace App\Filament\Resources\Actions\Pages;

use App\Filament\Resources\Actions\ActionResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateAction extends CreateRecord
{
    protected static string $resource = ActionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['slug'])) {
            $source = ! empty($data['title']['en'])
                ? $data['title']['en']
                : ($data['title']['ru'] ?? '');

            if ($source !== '') {
                $data['slug'] = mb_substr(Str::slug($source), 0, 64);
            }
        }

        return $data;
    }
}

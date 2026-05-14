<?php

namespace App\Filament\Resources\Careers\Pages;

use App\Filament\Resources\Careers\CareerResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateCareer extends CreateRecord
{
    protected static string $resource = CareerResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['slug'])) {
            $source = $data['title']['en']
                ?? $data['title']['ru']
                ?? $data['title']['uz']
                ?? '';

            if ($source !== '') {
                $data['slug'] = mb_substr(Str::slug($source), 0, 64);
            }
        }

        return $data;
    }
}

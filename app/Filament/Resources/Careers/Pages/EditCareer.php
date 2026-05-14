<?php

namespace App\Filament\Resources\Careers\Pages;

use App\Filament\Resources\Careers\CareerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditCareer extends EditRecord
{
    protected static string $resource = CareerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
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

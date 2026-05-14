<?php

namespace App\Filament\Resources\Pages\Pages;

use App\Filament\Resources\Pages\PageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

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

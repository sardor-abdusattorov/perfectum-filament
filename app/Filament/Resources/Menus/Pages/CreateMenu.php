<?php

namespace App\Filament\Resources\Menus\Pages;

use App\Filament\Resources\Menus\MenuResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMenu extends CreateRecord
{
    protected static string $resource = MenuResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (! empty($data['page_id'])) {
            $data['url'] = null;
        } else {
            $data['page_id'] = null;
        }

        return $data;
    }
}

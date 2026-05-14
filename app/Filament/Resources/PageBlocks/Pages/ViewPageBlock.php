<?php

namespace App\Filament\Resources\PageBlocks\Pages;

use App\Filament\Resources\PageBlocks\PageBlockResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPageBlock extends ViewRecord
{
    protected static string $resource = PageBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

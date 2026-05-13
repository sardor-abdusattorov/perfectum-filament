<?php

namespace App\Filament\Resources\NumberFilters\Pages;

use App\Filament\Resources\NumberFilters\NumberFilterResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNumberFilter extends EditRecord
{
    protected static string $resource = NumberFilterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

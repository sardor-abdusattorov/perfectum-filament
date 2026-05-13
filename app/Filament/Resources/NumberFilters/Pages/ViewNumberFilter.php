<?php

namespace App\Filament\Resources\NumberFilters\Pages;

use App\Filament\Resources\NumberFilters\NumberFilterResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNumberFilter extends ViewRecord
{
    protected static string $resource = NumberFilterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\NumberFilters\Pages;

use App\Filament\Resources\NumberFilters\NumberFilterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNumberFilters extends ListRecords
{
    protected static string $resource = NumberFilterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

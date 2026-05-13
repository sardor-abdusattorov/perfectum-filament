<?php

namespace App\Filament\Resources\NumberFilters;

use App\Filament\Resources\NumberFilters\Pages\CreateNumberFilter;
use App\Filament\Resources\NumberFilters\Pages\EditNumberFilter;
use App\Filament\Resources\NumberFilters\Pages\ListNumberFilters;
use App\Filament\Resources\NumberFilters\Pages\ViewNumberFilter;
use App\Filament\Resources\NumberFilters\Schemas\NumberFilterForm;
use App\Filament\Resources\NumberFilters\Tables\NumberFiltersTable;
use App\Models\NumberFilter;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NumberFilterResource extends Resource
{
    protected static ?string $model = NumberFilter::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHashtag;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.number_filters_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.number_filters_plural');
    }

    public static function getNavigationSort(): int
    {
        return 20;
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::$model::count();
    }

    public static function form(Schema $schema): Schema
    {
        return NumberFilterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NumberFiltersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListNumberFilters::route('/'),
            'create' => CreateNumberFilter::route('/create'),
            'view'   => ViewNumberFilter::route('/{record}'),
            'edit'   => EditNumberFilter::route('/{record}/edit'),
        ];
    }
}

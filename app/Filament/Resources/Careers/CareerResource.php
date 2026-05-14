<?php

namespace App\Filament\Resources\Careers;

use App\Filament\Resources\Careers\Pages\CreateCareer;
use App\Filament\Resources\Careers\Pages\EditCareer;
use App\Filament\Resources\Careers\Pages\ListCareers;
use App\Filament\Resources\Careers\Pages\ViewCareer;
use App\Filament\Resources\Careers\Schemas\CareerForm;
use App\Filament\Resources\Careers\Tables\CareersTable;
use App\Models\Career;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.careers_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.careers_plural');
    }

    public static function getNavigationSort(): int
    {
        return 4;
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::$model::count();
    }

    public static function form(Schema $schema): Schema
    {
        return CareerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CareersTable::configure($table);
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
            'index' => ListCareers::route('/'),
            'create' => CreateCareer::route('/create'),
            'view' => ViewCareer::route('/{record}'),
            'edit' => EditCareer::route('/{record}/edit'),
        ];
    }
}

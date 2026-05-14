<?php

namespace App\Filament\Resources\PageSettings;

use App\Filament\Resources\PageSettings\Pages\CreatePageSetting;
use App\Filament\Resources\PageSettings\Pages\EditPageSetting;
use App\Filament\Resources\PageSettings\Pages\ListPageSettings;
use App\Filament\Resources\PageSettings\Pages\ViewPageSetting;
use App\Filament\Resources\PageSettings\Schemas\PageSettingForm;
use App\Filament\Resources\PageSettings\Tables\PageSettingsTable;
use App\Models\PageSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageSettingResource extends Resource
{
    protected static ?string $model = PageSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentMagnifyingGlass;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.page_settings_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.page_settings_plural');
    }

    public static function getNavigationSort(): int
    {
        return 3;
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::$model::count();
    }

    public static function form(Schema $schema): Schema
    {
        return PageSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageSettingsTable::configure($table);
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
            'index' => ListPageSettings::route('/'),
            'create' => CreatePageSetting::route('/create'),
            'view' => ViewPageSetting::route('/{record}'),
            'edit' => EditPageSetting::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\PageBlocks\Pages\CreatePageBlock;
use App\Filament\Resources\PageBlocks\Pages\EditPageBlock;
use App\Filament\Resources\PageBlocks\Pages\ListPageBlocks;
use App\Filament\Resources\PageBlocks\Pages\ViewPageBlock;
use App\Filament\Resources\PageBlocks\Schemas\PageBlockForm;
use App\Filament\Resources\PageBlocks\Tables\PageBlocksTable;
use App\Models\PageBlock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageBlockResource extends Resource
{
    protected static ?string $model = PageBlock::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.page_blocks_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.page_blocks_plural');
    }

    public static function getNavigationSort(): int
    {
        return 5;
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::$model::count();
    }

    public static function form(Schema $schema): Schema
    {
        return PageBlockForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageBlocksTable::configure($table);
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
            'index' => ListPageBlocks::route('/'),
            'create' => CreatePageBlock::route('/create'),
            'view' => ViewPageBlock::route('/{record}'),
            'edit' => EditPageBlock::route('/{record}/edit'),
        ];
    }
}

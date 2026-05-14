<?php

namespace App\Filament\Resources\PageBlocks\Tables;

use App\Enums\PageSettingKey;
use App\Enums\PublishedStatus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PageBlocksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort')
            ->columns([
                ImageColumn::make('image')
                    ->label(__('app.label.image'))
                    ->disk('public')
                    ->square()
                    ->imageHeight(60)
                    ->defaultImageUrl(asset('/images/no_image.png')),

                TextColumn::make('page')
                    ->label(__('app.label.page_settings_single'))
                    ->badge()
                    ->sortable(),

                TextColumn::make('title')
                    ->label(__('app.label.title'))
                    ->searchable()
                    ->default(__('app.label.empty'))
                    ->wrap(),

                TextColumn::make('files_count')
                    ->label(__('app.label.tab_files'))
                    ->counts('files'),

                TextColumn::make('sort')
                    ->label(__('app.label.sort'))
                    ->sortable(),

                ToggleColumn::make('is_published')
                    ->label(__('app.label.show_on_site'))
                    ->sortable()
                    ->onIcon('heroicon-m-check-circle')
                    ->offIcon('heroicon-m-x-circle')
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                SelectFilter::make('page')
                    ->label(__('app.label.page_settings_single'))
                    ->options(PageSettingKey::getOptions()),

                SelectFilter::make('is_published')
                    ->label(__('app.label.status'))
                    ->options(PublishedStatus::getStatusOptions())
                    ->searchable()
                    ->preload(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Menus\Tables;

use App\Enums\MenuPosition;
use App\Enums\PublishedStatus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class MenusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort')
            ->columns([
                TextColumn::make('position')
                    ->label(__('app.label.position'))
                    ->badge()
                    ->sortable(),

                TextColumn::make('name')
                    ->label(__('app.label.name'))
                    ->default(__('app.label.empty'))
                    ->searchable()
                    ->wrap(),

                TextColumn::make('url')
                    ->label(__('app.label.menu_link_url'))
                    ->default(__('app.label.empty'))
                    ->wrap(),

                TextColumn::make('parent.name')
                    ->label(__('app.label.parent_menu'))
                    ->default(__('app.label.empty'))
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('footer_column')
                    ->label(__('app.label.footer_column'))
                    ->default(__('app.label.empty'))
                    ->toggleable(isToggledHiddenByDefault: true),

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
                SelectFilter::make('position')
                    ->label(__('app.label.position'))
                    ->options(MenuPosition::getOptions()),

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

<?php

namespace App\Filament\Resources\PageSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class PageSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('app.label.page_settings_single'))
                    ->badge()
                    ->searchable(),

                TextColumn::make('title')
                    ->label(__('app.label.title'))
                    ->default(__('app.label.empty'))
                    ->wrap()
                    ->searchable(),

                TextColumn::make('description')
                    ->label(__('app.label.description'))
                    ->default(__('app.label.empty'))
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('is_published')
                    ->label(__('app.label.show_on_site'))
                    ->onIcon('heroicon-m-check-circle')
                    ->offIcon('heroicon-m-x-circle')
                    ->onColor('success')
                    ->offColor('danger'),

                TextColumn::make('updated_at')
                    ->label(__('app.label.updated_at'))
                    ->dateTime()
                    ->wrap()
                    ->sortable(),
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

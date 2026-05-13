<?php

namespace App\Filament\Resources\FreeNumberFilters\Tables;

use App\Enums\FreeNumberFilterType;
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

class FreeNumberFiltersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort')
            ->columns([
                TextColumn::make('name')
                    ->label(__('app.label.name'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('value')
                    ->label(__('app.label.value'))
                    ->searchable()
                    ->wrap(),

                TextColumn::make('data_type')
                    ->label(__('app.label.data_type'))
                    ->badge()
                    ->formatStateUsing(fn (?FreeNumberFilterType $state) => $state?->label())
                    ->color(fn (?FreeNumberFilterType $state) => match ($state) {
                        FreeNumberFilterType::Number => 'info',
                        FreeNumberFilterType::Prefix => 'warning',
                        FreeNumberFilterType::Price  => 'success',
                        default                      => 'gray',
                    })
                    ->sortable(),

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

                TextColumn::make('created_at')
                    ->label(__('app.label.created_at'))
                    ->dateTime()
                    ->wrap()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('data_type')
                    ->label(__('app.label.data_type'))
                    ->options(FreeNumberFilterType::getOptions())
                    ->preload(),

                SelectFilter::make('is_published')
                    ->label(__('app.label.status'))
                    ->options(PublishedStatus::getStatusOptions())
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

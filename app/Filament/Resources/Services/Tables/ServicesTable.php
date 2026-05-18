<?php

namespace App\Filament\Resources\Services\Tables;

use App\Enums\PublishedStatus;
use App\Models\ServiceCategory;
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

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort')
            ->columns([
                ImageColumn::make('icon')
                    ->label(__('app.label.icon'))
                    ->disk('public')
                    ->square()
                    ->imageHeight(48)
                    ->defaultImageUrl(asset('/images/no_image.png')),

                TextColumn::make('title')
                    ->label(__('app.label.title'))
                    ->searchable()
                    ->wrap(),

                TextColumn::make('category.title')
                    ->label(__('app.label.service_categories_single'))
                    ->badge()
                    ->color('gray'),

                TextColumn::make('slug')
                    ->label(__('app.label.slug'))
                    ->searchable()
                    ->badge()
                    ->color('gray'),

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
                SelectFilter::make('service_category_id')
                    ->label(__('app.label.service_categories_single'))
                    ->options(fn () => ServiceCategory::query()
                        ->orderBy('sort')
                        ->get()
                        ->mapWithKeys(fn (ServiceCategory $c) => [$c->id => $c->title])
                        ->all())
                    ->searchable()
                    ->preload(),

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

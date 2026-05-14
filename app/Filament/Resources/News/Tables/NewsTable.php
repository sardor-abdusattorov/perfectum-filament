<?php

namespace App\Filament\Resources\News\Tables;

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
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class NewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('published_at', 'desc')
            ->columns([
                ImageColumn::make('image')
                    ->label(__('app.label.image'))
                    ->disk('public')
                    ->square()
                    ->imageHeight(60)
                    ->defaultImageUrl(asset('/images/no_image.png')),

                TextColumn::make('title')
                    ->label(__('app.label.title'))
                    ->searchable()
                    ->default(__('app.label.empty'))
                    ->wrap(),

                TextColumn::make('slug')
                    ->label(__('app.label.slug'))
                    ->searchable()
                    ->badge()
                    ->color('gray'),

                TextColumn::make('published_at')
                    ->label(__('app.label.published_at'))
                    ->dateTime('d.m.Y')
                    ->sortable(),

                TextColumn::make('sort')
                    ->label(__('app.label.sort'))
                    ->sortable(),

                ToggleColumn::make('show_all_time')
                    ->label(__('app.label.show_all_time'))
                    ->onIcon('heroicon-m-check-circle')
                    ->offIcon('heroicon-m-x-circle')
                    ->onColor('success')
                    ->offColor('gray'),

                ToggleColumn::make('is_published')
                    ->label(__('app.label.show_on_site'))
                    ->sortable()
                    ->onIcon('heroicon-m-check-circle')
                    ->offIcon('heroicon-m-x-circle')
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                SelectFilter::make('is_published')
                    ->label(__('app.label.status'))
                    ->options(PublishedStatus::getStatusOptions())
                    ->searchable()
                    ->preload(),

                TernaryFilter::make('show_all_time')
                    ->label(__('app.label.show_all_time')),
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

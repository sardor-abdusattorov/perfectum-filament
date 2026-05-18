<?php

namespace App\Filament\Resources\ServiceCategories\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->label(__('app.label.slug'))
                    ->helperText(__('app.helper.page_slug'))
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->columnSpanFull(),

                TranslatableTabs::make('translations')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->label(__('app.label.title'))
                            ->required(),

                        Textarea::make('description')
                            ->label(__('app.label.description'))
                            ->rows(2),
                    ]),

                TextInput::make('sort')
                    ->label(__('app.label.sort'))
                    ->numeric()
                    ->default(0),

                Toggle::make('is_published')
                    ->label(__('app.label.show_on_site'))
                    ->helperText(__('app.helper.if_disabled_hidden'))
                    ->default(true),
            ]);
    }
}

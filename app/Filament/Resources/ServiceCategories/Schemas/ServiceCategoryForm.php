<?php

namespace App\Filament\Resources\ServiceCategories\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make(__('app.label.basic_information'))
                    ->schema([
                        TextInput::make('slug')
                            ->label(__('app.label.slug'))
                            ->helperText(__('app.helper.page_slug'))
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        TranslatableTabs::make('translations')
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
                    ]),

                Section::make(__('app.label.seo'))
                    ->description(__('app.helper.seo_optional'))
                    ->collapsed()
                    ->schema([
                        TranslatableTabs::make('seo_translations')
                            ->schema([
                                TextInput::make('meta_title')
                                    ->label(__('app.label.meta_title'))
                                    ->maxLength(255),

                                Textarea::make('meta_description')
                                    ->label(__('app.label.meta_description'))
                                    ->rows(3),
                            ]),
                    ]),
            ]);
    }
}

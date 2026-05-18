<?php

namespace App\Filament\Resources\PageSettings\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Enums\PageSettingKey;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PageSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make(__('app.label.basic_information'))
                    ->schema([
                        Select::make('name')
                            ->label(__('app.label.page_settings_single'))
                            ->options(PageSettingKey::class)
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->selectablePlaceholder(false),

                        TranslatableTabs::make('translations')
                            ->schema([
                                TextInput::make('title')
                                    ->label(__('app.label.title'))
                                    ->required(),

                                Textarea::make('description')
                                    ->label(__('app.label.description'))
                                    ->rows(3),

                                TextInput::make('meta_title')
                                    ->label(__('app.label.meta_title'))
                                    ->required(),

                                Textarea::make('meta_description')
                                    ->label(__('app.label.meta_description'))
                                    ->required()
                                    ->rows(3),

                                Textarea::make('meta_keywords')
                                    ->label(__('app.label.meta_keywords'))
                                    ->rows(2),
                            ]),

                        Toggle::make('is_published')
                            ->label(__('app.label.show_on_site'))
                            ->helperText(__('app.helper.if_disabled_hidden'))
                            ->default(true),
                    ]),
            ]);
    }
}

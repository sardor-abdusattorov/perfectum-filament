<?php

namespace App\Filament\Resources\Sliders\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make(__('app.label.basic_information'))
                    ->schema([
                        TranslatableTabs::make('translations')
                            ->schema([
                                TextInput::make('title')
                                    ->label(__('app.label.title'))
                                    ->required(),

                                Textarea::make('description')
                                    ->label(__('app.label.description'))
                                    ->rows(4)
                                    ->helperText(__('app.helper.text_displayed_on_site')),

                                TextInput::make('button_text')
                                    ->label(__('app.label.button_text')),
                            ]),

                        FileUpload::make('main_image')
                            ->label(__('app.label.main_image'))
                            ->image()
                            ->directory('sliders')
                            ->imageEditor(),

                        TextInput::make('link')
                            ->label(__('app.label.link'))
                            ->url()
                            ->helperText(__('app.helper.link_target')),

                        TextInput::make('sort')
                            ->label(__('app.label.sort'))
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_published')
                            ->label(__('app.label.show_on_site'))
                            ->helperText(__('app.helper.if_disabled_hidden'))
                            ->default(true),
                    ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Faqs\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqForm
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
                                TextInput::make('question')
                                    ->label(__('app.label.question'))
                                    ->required(),

                                RichEditor::make('answer')
                                    ->label(__('app.label.answer'))
                                    ->helperText(__('app.helper.text_displayed_on_site'))
                                    ->columnSpanFull(),

                                TextInput::make('slug')
                                    ->label(__('app.label.slug'))
                                    ->helperText(__('app.helper.unique_translation_identifier')),
                            ]),

                        FileUpload::make('image')
                            ->label(__('app.label.image'))
                            ->image()
                            ->directory('faqs')
                            ->imageEditor(),

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

<?php

namespace App\Filament\Resources\Tenders\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Filament\Support\DocumentUpload;
use App\Filament\Support\ImageUpload;
use App\Filament\Support\TextEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class TenderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('tender')
                    ->columnSpanFull()
                    ->schema([
                        Tabs\Tab::make(__('app.label.basic_information'))
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
                                            ->rows(4),

                                        TextEditor::make('tenders', 'content')
                                            ->label(__('app.label.content'))
                                            ->helperText(__('app.helper.text_displayed_on_site'))
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 12rem; max-height: 40vh; overflow-y: auto;',
                                            ]),
                                    ]),

                                ImageUpload::make('tenders', field: 'image')
                                    ->label(__('app.label.image')),

                                TextInput::make('sort')
                                    ->label(__('app.label.sort'))
                                    ->numeric()
                                    ->default(0),

                                Toggle::make('is_published')
                                    ->label(__('app.label.show_on_site'))
                                    ->helperText(__('app.helper.if_disabled_hidden'))
                                    ->default(true),
                            ]),

                        Tabs\Tab::make(__('app.label.tab_files'))
                            ->schema([
                                Repeater::make('files')
                                    ->relationship()
                                    ->label(__('app.label.tab_files'))
                                    ->schema([
                                        DocumentUpload::make('tenders')
                                            ->storeFileNamesIn('name')
                                            ->required(),
                                    ])
                                    ->orderColumn('sort')
                                    ->reorderable()
                                    ->defaultItems(0)
                                    ->addActionLabel(__('app.label.add_file')),
                            ]),
                    ]),
            ]);
    }
}

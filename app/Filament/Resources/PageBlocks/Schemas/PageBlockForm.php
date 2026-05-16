<?php

namespace App\Filament\Resources\PageBlocks\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Enums\PageSettingKey;
use App\Filament\Support\DocumentUpload;
use App\Filament\Support\ImageUpload;
use App\Filament\Support\TextEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class PageBlockForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('page_block')
                    ->columnSpanFull()
                    ->schema([
                        Tabs\Tab::make(__('app.label.basic_information'))
                            ->schema([
                                Select::make('page')
                                    ->label(__('app.label.page_settings_single'))
                                    ->options(PageSettingKey::class)
                                    ->required()
                                    ->selectablePlaceholder(false),

                                TextInput::make('name')
                                    ->label(__('app.label.key'))
                                    ->helperText(__('app.helper.block_key'))
                                    ->maxLength(255),

                                TranslatableTabs::make('translations')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label(__('app.label.title')),

                                        Textarea::make('description')
                                            ->label(__('app.label.description'))
                                            ->rows(2),

                                        TextEditor::make('page-blocks', 'content')
                                            ->label(__('app.label.content'))
                                            ->helperText(__('app.helper.text_displayed_on_site'))
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 12rem; max-height: 40vh; overflow-y: auto;',
                                            ]),
                                    ]),

                                ImageUpload::make('page-blocks', field: 'image')
                                    ->label(__('app.label.image')),

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
                                        DocumentUpload::make('page-blocks')
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

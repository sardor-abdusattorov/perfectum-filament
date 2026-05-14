<?php

namespace App\Filament\Resources\News\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Filament\Support\ImageUpload;
use App\Filament\Support\TextEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NewsForm
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
                            ->rows(3),

                        TextEditor::make('news', 'content')
                            ->label(__('app.label.content'))
                            ->helperText(__('app.helper.text_displayed_on_site'))
                            ->extraInputAttributes([
                                'style' => 'min-height: 12rem; max-height: 40vh; overflow-y: auto;',
                            ]),
                    ]),

                ImageUpload::make('news', field: 'image')
                    ->label(__('app.label.image'))
                    ->columnSpanFull(),

                DateTimePicker::make('published_at')
                    ->label(__('app.label.published_at'))
                    ->seconds(false)
                    ->default(now()),

                TextInput::make('sort')
                    ->label(__('app.label.sort'))
                    ->numeric()
                    ->default(0),

                Toggle::make('show_all_time')
                    ->label(__('app.label.show_all_time'))
                    ->helperText(__('app.helper.show_all_time'))
                    ->default(false),

                Toggle::make('is_published')
                    ->label(__('app.label.show_on_site'))
                    ->helperText(__('app.helper.if_disabled_hidden'))
                    ->default(true),
            ]);
    }
}

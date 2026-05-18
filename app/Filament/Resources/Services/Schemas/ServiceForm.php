<?php

namespace App\Filament\Resources\Services\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Filament\Support\DocumentUpload;
use App\Filament\Support\ImageUpload;
use App\Filament\Support\TextEditor;
use App\Models\ServiceCategory;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('service')
                    ->columnSpanFull()
                    ->schema([
                        Tabs\Tab::make(__('app.label.basic_information'))
                            ->schema([
                                Select::make('service_category_id')
                                    ->label(__('app.label.service_categories_single'))
                                    ->options(fn () => ServiceCategory::query()
                                        ->orderBy('sort')
                                        ->get()
                                        ->mapWithKeys(fn (ServiceCategory $c) => [$c->id => $c->title])
                                        ->all())
                                    ->searchable()
                                    ->required(),

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

                                        TextInput::make('subtitle')
                                            ->label(__('app.label.subtitle')),

                                        TextEditor::make('services', 'description')
                                            ->label(__('app.label.description'))
                                            ->helperText(__('app.helper.text_displayed_on_site'))
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 16rem; max-height: 60vh; overflow-y: auto;',
                                            ]),

                                        Textarea::make('description_comment')
                                            ->label(__('app.label.description_comment'))
                                            ->rows(3),

                                        TextEditor::make('services', 'billing_description')
                                            ->label(__('app.label.billing_description'))
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 12rem; max-height: 40vh; overflow-y: auto;',
                                            ]),

                                        Textarea::make('billing_description_comment')
                                            ->label(__('app.label.billing_description_comment'))
                                            ->rows(3),
                                    ]),

                                ImageUpload::make('services', field: 'image')
                                    ->label(__('app.label.image')),

                                ImageUpload::make('services', field: 'icon')
                                    ->label(__('app.label.icon')),

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
                                        DocumentUpload::make('services')
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

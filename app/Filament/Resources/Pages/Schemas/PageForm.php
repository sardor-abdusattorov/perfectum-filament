<?php

namespace App\Filament\Resources\Pages\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Enums\PageSection;
use App\Filament\Support\ImageUpload;
use App\Filament\Support\TextEditor;
use App\Models\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Unique;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('page')
                    ->columnSpanFull()
                    ->schema([
                        Tabs\Tab::make(__('app.label.basic_information'))
                            ->schema([
                                Select::make('section')
                                    ->label(__('app.label.section'))
                                    ->options(PageSection::class)
                                    ->default(PageSection::Pages->value)
                                    ->required()
                                    ->selectablePlaceholder(false)
                                    ->live()
                                    ->afterStateUpdated(fn (Set $set) => $set('parent_id', null))
                                    ->helperText(fn (Get $get): string => __('app.helper.page_route')
                                        . ': /' . self::sectionValue($get)
                                        . '/' . ($get('slug') ?: 'slug')),

                                TextInput::make('slug')
                                    ->label(__('app.label.slug'))
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->unique(
                                        ignoreRecord: true,
                                        modifyRuleUsing: fn (Unique $rule, Get $get) => $rule->where('section', self::sectionValue($get)),
                                    ),

                                Select::make('template')
                                    ->label(__('app.label.template'))
                                    ->options(['default' => __('app.page_template.default')])
                                    ->default('default')
                                    ->required()
                                    ->selectablePlaceholder(false),

                                Select::make('parent_id')
                                    ->label(__('app.label.parent_page'))
                                    ->options(fn (Get $get, ?Page $record): array => Page::query()
                                        ->where('section', self::sectionValue($get))
                                        ->when($record, fn ($query) => $query->whereKeyNot($record->getKey()))
                                        ->pluck('slug', 'id')
                                        ->toArray())
                                    ->searchable()
                                    ->preload(),

                                TranslatableTabs::make('translations')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label(__('app.label.title'))
                                            ->required(),

                                        TextEditor::make('pages', 'content')
                                            ->label(__('app.label.content'))
                                            ->helperText(__('app.helper.text_displayed_on_site'))
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 12rem; max-height: 40vh; overflow-y: auto;',
                                            ]),
                                    ]),

                                ImageUpload::make('pages', field: 'image')
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

                        Tabs\Tab::make(__('app.label.tab_seo'))
                            ->schema([
                                TranslatableTabs::make('seo_translations')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label(__('app.label.meta_title')),

                                        Textarea::make('meta_description')
                                            ->label(__('app.label.meta_description'))
                                            ->rows(3),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    private static function sectionValue(Get $get): string
    {
        $section = $get('section');

        if ($section instanceof PageSection) {
            return $section->value;
        }

        return (string) ($section ?: PageSection::Pages->value);
    }
}

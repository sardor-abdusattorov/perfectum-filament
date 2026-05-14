<?php

namespace App\Filament\Resources\Menus\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Enums\MenuPosition;
use App\Models\Menu;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make(__('app.label.basic_information'))
                    ->schema([
                        Select::make('position')
                            ->label(__('app.label.position'))
                            ->options(MenuPosition::class)
                            ->required()
                            ->live(),

                        Select::make('footer_column')
                            ->label(__('app.label.footer_column'))
                            ->options([1 => '1', 2 => '2', 3 => '3', 4 => '4'])
                            ->visible(fn (Get $get): bool => $get('position') === MenuPosition::Footer->value),

                        Select::make('parent_id')
                            ->label(__('app.label.parent_menu'))
                            ->options(fn (?Menu $record): array => Menu::query()
                                ->when($record, fn ($query) => $query->whereKeyNot($record->getKey()))
                                ->get()
                                ->mapWithKeys(fn (Menu $menu): array => [
                                    $menu->getKey() => $menu->getTranslation('name', app()->getLocale(), false)
                                        ?: ('#' . $menu->getKey()),
                                ])
                                ->toArray())
                            ->searchable(),

                        TranslatableTabs::make('translations')
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('app.label.name'))
                                    ->helperText(__('app.helper.menu_name')),
                            ]),

                        Radio::make('link_kind')
                            ->label(__('app.label.menu_link_kind'))
                            ->options([
                                'page' => __('app.label.menu_link_page'),
                                'url' => __('app.label.menu_link_url'),
                            ])
                            ->default('page')
                            ->live()
                            ->dehydrated(false)
                            ->formatStateUsing(fn (?Menu $record): string => $record && $record->url && ! $record->page_id
                                ? 'url'
                                : 'page'),

                        Select::make('page_id')
                            ->label(__('app.label.menu_link_page'))
                            ->relationship('page', 'slug')
                            ->searchable()
                            ->preload()
                            ->visible(fn (Get $get): bool => $get('link_kind') === 'page')
                            ->required(fn (Get $get): bool => $get('link_kind') === 'page'),

                        TextInput::make('url')
                            ->label(__('app.label.menu_link_url'))
                            ->helperText('/tariffs · /services · /news · /faq · /coverage · /free-numbers · /career · /contacts')
                            ->maxLength(255)
                            ->visible(fn (Get $get): bool => $get('link_kind') === 'url')
                            ->required(fn (Get $get): bool => $get('link_kind') === 'url'),

                        TextInput::make('icon')
                            ->label(__('app.label.icon'))
                            ->helperText(__('app.helper.menu_icon'))
                            ->maxLength(255),

                        Select::make('target')
                            ->label(__('app.label.target'))
                            ->options([
                                '_self' => __('app.target.self'),
                                '_blank' => __('app.target.blank'),
                            ])
                            ->default('_self')
                            ->required()
                            ->selectablePlaceholder(false),

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

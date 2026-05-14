<?php

namespace App\Filament\Resources\Menus\Schemas;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Enums\MenuPosition;
use App\Filament\Support\ImageUpload;
use App\Models\Menu;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
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
                            ->default(MenuPosition::HeaderMain->value)
                            ->required()
                            ->selectablePlaceholder(false)
                            ->live()
                            ->afterStateUpdated(fn (Set $set) => $set('parent_id', null)),

                        Select::make('footer_column')
                            ->label(__('app.label.footer_column'))
                            ->options([1 => '1', 2 => '2', 3 => '3', 4 => '4'])
                            ->helperText(__('app.helper.footer_column'))
                            ->visible(fn (Get $get): bool => self::positionValue($get) === MenuPosition::Footer->value),

                        Select::make('parent_id')
                            ->label(__('app.label.parent_menu'))
                            ->options(fn (Get $get, ?Menu $record): array => Menu::query()
                                ->where('position', self::positionValue($get))
                                ->whereNull('parent_id')
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
                                    ->required(),
                            ]),

                        TextInput::make('url')
                            ->label(__('app.label.menu_link_url'))
                            ->helperText('/tariffs · /services · /news · /faq · /coverage · /free-numbers · /career · /contacts · /info/about')
                            ->required()
                            ->maxLength(255),

                        ImageUpload::make('menus', field: 'icon')
                            ->label(__('app.label.icon'))
                            ->helperText(__('app.helper.menu_icon')),

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

    private static function positionValue(Get $get): ?string
    {
        $position = $get('position');

        if ($position instanceof MenuPosition) {
            return $position->value;
        }

        return $position;
    }
}

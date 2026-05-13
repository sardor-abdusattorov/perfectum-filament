<?php

namespace App\Filament\Resources\FreeNumberFilters\Schemas;

use App\Enums\FreeNumberFilterType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FreeNumberFilterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make(__('app.label.basic_information'))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('app.label.name'))
                            ->helperText(__('app.helper.free_number_filter_name'))
                            ->required()
                            ->maxLength(255),

                        TextInput::make('value')
                            ->label(__('app.label.value'))
                            ->helperText(__('app.helper.free_number_filter_value'))
                            ->required()
                            ->maxLength(255),

                        Select::make('data_type')
                            ->label(__('app.label.data_type'))
                            ->helperText(__('app.helper.free_number_filter_type'))
                            ->options(FreeNumberFilterType::getOptions())
                            ->native(false)
                            ->required(),

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

<?php

namespace App\Filament\Resources\Socials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SocialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make(__('app.label.basic_information'))
                    ->schema([
                        FileUpload::make('image')
                            ->label(__('app.label.icon'))
                            ->disk('public')
                            ->directory('socials')
                            ->visibility('public')
                            ->image()
                            ->acceptedFileTypes(['image/svg+xml', 'image/png', 'image/webp'])
                            ->maxSize(512)
                            ->previewable()
                            ->downloadable()
                            ->helperText(__('app.helper.social_image')),

                        TextInput::make('name')
                            ->label(__('app.label.name'))
                            ->maxLength(255)
                            ->helperText(__('app.helper.social_name')),

                        TextInput::make('url')
                            ->label(__('app.label.url'))
                            ->required()
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://...'),

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

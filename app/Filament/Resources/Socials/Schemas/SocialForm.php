<?php

namespace App\Filament\Resources\Socials\Schemas;

use Filament\Forms\Components\Select;
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
                        Select::make('icon')
                            ->label(__('app.label.icon'))
                            ->options(static::iconOptions())
                            ->required()
                            ->searchable()
                            ->native(false)
                            ->allowHtml(),

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

    protected static function iconOptions(): array
    {
        $icons = [
            'fab fa-facebook-f' => 'Facebook',
            'fab fa-instagram' => 'Instagram',
            'fab fa-telegram' => 'Telegram',
            'fab fa-x-twitter' => 'X (Twitter)',
            'fab fa-twitter' => 'Twitter (legacy)',
            'fab fa-linkedin-in' => 'LinkedIn',
            'fab fa-youtube' => 'YouTube',
            'fab fa-tiktok' => 'TikTok',
            'fab fa-vk' => 'VKontakte',
            'fab fa-odnoklassniki' => 'Odnoklassniki',
            'fab fa-whatsapp' => 'WhatsApp',
            'fab fa-viber' => 'Viber',
            'fab fa-pinterest-p' => 'Pinterest',
            'fab fa-snapchat' => 'Snapchat',
            'fab fa-discord' => 'Discord',
            'fab fa-github' => 'GitHub',
            'fab fa-gitlab' => 'GitLab',
            'fab fa-medium' => 'Medium',
            'fab fa-twitch' => 'Twitch',
            'fab fa-reddit' => 'Reddit',
            'fab fa-spotify' => 'Spotify',
            'fab fa-soundcloud' => 'SoundCloud',
            'fab fa-dribbble' => 'Dribbble',
            'fab fa-behance' => 'Behance',
        ];

        $options = [];

        foreach ($icons as $class => $label) {
            $options[$class] = "<i class=\"{$class}\" style=\"width:1.25rem;text-align:center;margin-right:0.5rem;\"></i> {$label}";
        }

        return $options;
    }
}

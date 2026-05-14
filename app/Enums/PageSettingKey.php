<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PageSettingKey: string implements HasLabel
{
    case home = 'home';
    case Tariffs = 'tariffs';
    case Services = 'services';
    case News = 'news';
    case Faq = 'faq';
    case Coverage = 'coverage';
    case FreeNumbers = 'free_numbers';
    case Career = 'career';
    case Contacts = 'contacts';

    public function getLabel(): string
    {
        return __("app.page_settings.{$this->value}");
    }

    public static function getOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $case) => [$case->value => $case->getLabel()])
            ->toArray();
    }
}

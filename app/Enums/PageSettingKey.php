<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PageSettingKey: string implements HasLabel
{
    case Home = 'home';
    case Careers = 'careers';
    case Contacts = 'contacts';
    case About = 'about';
    case Tenders = 'tenders';
    case Tariffs = 'tariffs';
    case Services = 'services';
    case News = 'news';
    case Dealers = 'dealers';

    case Coverage = 'coverage';
    case FreeNumbers = 'free_numbers';

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

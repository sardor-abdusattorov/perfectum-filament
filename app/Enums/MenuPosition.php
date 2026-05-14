<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum MenuPosition: string implements HasLabel
{
    case Header = 'header';
    case Footer = 'footer';
    case Hamburger = 'hamburger';

    public function getLabel(): string
    {
        return __("app.menu_position.{$this->value}");
    }
    public static function getOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $case) => [$case->value => $case->getLabel()])
            ->toArray();
    }
}

<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PageSection: string implements HasLabel
{
    case Pages = 'pages';
    case Helpers = 'helpers';
    case Legal = 'legal';
    case Info = 'info';

    public function getLabel(): string
    {
        return __("app.page_section.{$this->value}");
    }

    public static function getOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $case) => [$case->value => $case->getLabel()])
            ->toArray();
    }
}

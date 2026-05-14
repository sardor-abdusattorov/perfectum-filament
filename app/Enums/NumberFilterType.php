<?php

namespace App\Enums;

enum NumberFilterType: int
{
    case Number = 1;
    case Prefix = 2;
    case Price = 3;

    public function label(): string
    {
        return match ($this) {
            self::Number => __('app.number_filter_type.number'),
            self::Prefix => __('app.number_filter_type.prefix'),
            self::Price  => __('app.number_filter_type.price'),
        };
    }

    public static function getOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $case) => [$case->value => $case->label()])
            ->toArray();
    }
}

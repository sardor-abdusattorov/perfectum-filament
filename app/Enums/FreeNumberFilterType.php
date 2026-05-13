<?php

namespace App\Enums;

/**
 * Тип значения фильтра «Свободных номеров».
 *
 *  Number  — паттерн самого номера (например, 99-XX-XX)
 *  Prefix  — префикс/оператор (90, 91, 93 и т.п.)
 *  Price   — ценовая категория
 */
enum FreeNumberFilterType: int
{
    case Number = 1;
    case Prefix = 2;
    case Price = 3;

    public function label(): string
    {
        return match ($this) {
            self::Number => __('app.free_number_filter_type.number'),
            self::Prefix => __('app.free_number_filter_type.prefix'),
            self::Price  => __('app.free_number_filter_type.price'),
        };
    }

    public static function getOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $case) => [$case->value => $case->label()])
            ->toArray();
    }
}

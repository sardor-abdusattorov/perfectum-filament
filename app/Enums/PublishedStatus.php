<?php

namespace App\Enums;

enum PublishedStatus: int
{
    case Published = 1;
    case Unpublished = 0;

    public function label(): string
    {
        return match($this) {
            self::Published => __('app.status.published'),
            self::Unpublished => __('app.status.unpublished'),
        };
    }

    public static function getStatusOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn(self $case) => [$case->value => $case->label()])
            ->toArray();
    }
}

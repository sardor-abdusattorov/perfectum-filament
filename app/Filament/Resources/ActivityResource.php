<?php

namespace App\Filament\Resources;

use MrAdder\FilamentLogger\Resources\ActivityResource as BaseActivityResource;

class ActivityResource extends BaseActivityResource
{
    public static function getNavigationGroup(): ?string
    {
        return __('app.label.administration');
    }

    public static function getNavigationSort(): ?int
    {
        return 10;
    }
    public static function getNavigationBadge(): ?string
    {
        return number_format(static::getModel()::count());
    }
}

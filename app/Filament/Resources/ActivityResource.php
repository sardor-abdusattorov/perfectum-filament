<?php

namespace App\Filament\Resources;

use MrAdder\FilamentLogger\Resources\ActivityResource as BaseActivityResource;

/**
 * Подкласс ActivityResource из mradder/filament-logger.
 *
 * Зачем: оригинальный ресурс берёт навигационную группу из строки
 * config('filament-logger.resources.navigation_group') = 'Settings',
 * которая не совпадает с нашей группой __('app.label.administration')
 * («Администрирование»), поэтому он висел в отдельной невидимой
 * группе. Здесь возвращаем правильную локализованную группу и
 * ставим большой sort, чтобы пункт «Журнал активности» висел
 * последним в «Администрировании».
 *
 * Подкласс находится в app/Filament/Resources/, поэтому подхватится
 * автоматически через discoverResources() — явная регистрация в
 * AdminPanelProvider::resources([...]) больше не нужна.
 */
class ActivityResource extends BaseActivityResource
{
    public static function getNavigationGroup(): ?string
    {
        return __('app.label.administration');
    }

    public static function getNavigationSort(): ?int
    {
        return 999;
    }
}

<?php

use App\Enums\PageSection;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'throttle:30,1'],
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('/{section}/{slug}', [PagesController::class, 'show'])
            ->whereIn('section', array_column(PageSection::cases(), 'value'))
            ->name('pages.show');
    }
);

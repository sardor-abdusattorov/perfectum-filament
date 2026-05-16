<?php

use App\Enums\PageSection;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TendersController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'throttle:30,1'],
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

        Route::get('/about', [HomeController::class, 'about'])->name('about');

        Route::prefix('careers')->name('careers.')->group(function () {
            Route::get('/', [CareersController::class, 'index'])->name('index');
            Route::get('/{slug}', [CareersController::class, 'show'])->name('show');
        });

        Route::prefix('tenders')->name('tenders.')->group(function () {
            Route::get('/', [TendersController::class, 'index'])->name('index');
            Route::get('/{slug}', [TendersController::class, 'show'])->name('show');
        });

        Route::prefix('news')->name('news.')->group(function () {
            Route::get('/', [NewsController::class, 'index'])->name('index');
            Route::get('/{slug}', [NewsController::class, 'show'])->name('show');
        });

        Route::get('/{section}/{slug}', [PagesController::class, 'show'])
            ->whereIn('section', array_column(PageSection::cases(), 'value'))
            ->name('pages.show');
    }
);

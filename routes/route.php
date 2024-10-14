<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use JobMetric\Hero\Http\Controllers\HeroController;

/*
|--------------------------------------------------------------------------
| Laravel Media Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Hero package
|
*/

// media
Route::prefix('hero')->name('hero.')->namespace('JobMetric\Hero\Http\Controllers')->group(function () {
    Route::middleware([
        SubstituteBindings::class
    ])->group(function () {
        Route::get('/', [HeroController::class, 'index'])->name('index');
    });
});

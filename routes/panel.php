<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Hero\Http\Controllers\HeroController;

/*
|--------------------------------------------------------------------------
| Laravel Hero Panel Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Hero panel package
|
*/

// route hero panel
Route::name('hero.')->namespace('JobMetric\Hero\Http\Controllers')->group(function () {
    Route::get('/', [HeroController::class, 'index'])->name('dashboard');
});

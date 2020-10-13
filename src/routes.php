<?php

use GabrielFemi\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'GabrielFemi\Contact\Http\Controllers'], function () {
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'send']);
});

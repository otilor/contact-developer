<?php

use GabrielFemi\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('contact', function () {
    return view('contact::contact');
})->name('contact');;

Route::group(['namespace' => 'GabrielFemi\Contact\Http\Controllers'], function () {
    Route::post('contact', [ContactController::class, 'send']);
});

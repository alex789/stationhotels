<?php

use Illuminate\Support\Facades\Route;



Route::domain('euston.' . env('APP_URL'))->name('euston.')->group(function () {

    Route::get('/', function () {
        return view('euston.index');
    })->name('station');

    Route::get('/the-wesley-london-euston', function () {
        return view('euston.the-wesley');
    })->name('the-wesley');

    Route::get('/euston-square-hotel', function () {
        return view('euston.euston-square-hotel');
    })->name('euston-square-hotel');

});


Route::get('/', function () {
    return view('home');
})->name('home');
<?php

use Illuminate\Support\Facades\Route;



Route::domain('euston.' . env('APP_URL'))->name('euston.')->group(function() {

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



Route::domain('manchester-piccadilly.' . env('APP_URL'))->name('manchester-piccadilly.')->group(function() {

    Route::get('/', function () {
        return view('manchester-piccadilly.index');
    })->name('station');

    Route::get('/piccadilly-central-pub-and-hotel', function () {
        return view('manchester-piccadilly.central-hotel');
    })->name('central-hotel');

    Route::get('/native-manchester', function () {
        return view('manchester-piccadilly.native-manchester');
    })->name('native-manchester');

});





Route::get('/', function () {
    return view('home');
})->name('home');
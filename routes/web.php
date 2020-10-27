<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\AnimalController;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::middleware ('auth') -> group (function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/animal', 'App\Http\Controllers\AnimalController@index');
    Route::resource('animal','App\Http\Controllers\AnimalController');
    Route::post ('/animal/', 'App\Http\Controllers\AnimalController@store');
    Route::put ('/animal_update/{id}/', 'AnimalController@update');
});

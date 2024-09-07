<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});


Route::get('/quote/{slug}', [
    'as' => 'quote.show',
    'uses' => 'App\Http\Controllers\FrontController@quote',
]);



Route::post('cotizacion', [
    'uses' => 'App\Http\Controllers\FrontController@email',
    'as' => 'send.email',
]);


Route::get('/auth/quote', [
    'uses' => 'App\Http\Controllers\FrontController@quoteAuth',
    'as' => 'quote.auth',
]);

Route::post('/login/quote', [
    'uses' => 'App\Http\Controllers\FrontController@quoteLogin',
    'as' => 'login.quote',
]);

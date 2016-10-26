<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', function () {
        return view('index');
    });
    // Gets main page for lorem ipsum
    Route::get('/lorem-ipsum', 'LoremIpsumController@index');
    // Posts for submitting the lorem ipsum generator form
    Route::post('/lorem-ipsum', 'LoremIpsumController@store');
    // Gets main page for random user generator
    Route::get('/user-generator', 'UserGeneratorController@index');
    // Posts for submitting the random user generator form
    Route::post('/user-generator', 'UserGeneratorController@store');
    // Gets main page for password generator
    Route::get('/password-generator', 'PasswordGeneratorController@index');
    // Posts for submitting the password generator form
    Route::post('/password-generator', 'PasswordGeneratorController@store');
});

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
    Route::get('/lorem-ipsum', 'LoremIpsumController@getIndex')->name('lorem-ipsum.index');
    // Posts for submitting the lorem ipsum generator form
    Route::post('/lorem-ipsum', 'LoremIpsumController@postIndex')->name('lorem-ipsum.store');
    // Gets main page for random user generator
    Route::get('/user-generator', 'UserGeneratorController@getIndex')->name('user-generator.index');
    // Posts for submitting the random user generator form
    Route::post('/user-generator', 'UserGeneratorController@postIndex')->name('user-generator.store');
    // Gets main page for password generator
    Route::get('/password-generator', 'PasswordGeneratorController@getIndex')->name('password-generator.index');
    // Posts for submitting the password generator form
    Route::post('/password-generator', 'PasswordGeneratorController@postIndex')->name('password-generator.store');
});

if(App::environment() == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


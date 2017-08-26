<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.core');
    });
});

Route::group(['prefix' => 'lang'], function () {

    Route::get('/', ['as' => 'app.languages.index', 'uses' => 'MBLanguageCodesController@index']);

    Route::group(['prefix' => '{id}'], function () {
        Route::get('/edit', ['as' => 'app.languages.edit', 'uses' => 'MBLanguageCodesController@edit']);
        Route::post('/edit', ['uses' => 'MBLanguageCodesController@update']);

    });

});

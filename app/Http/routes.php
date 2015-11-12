<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// when route page of website is navigated to in browser the index function within the staticPageController is called.
Route::get('/','StaticPageController@index');
Route::get('/QUANGOFF-dispenser.html', function(){
    return Redirect::to('/dispenser', 301);
});
Route::get('/QUANGOFF-glass-bottle-range.html', function(){
    return Redirect::to('/glassBottleRange', 301);
});
Route::get('//Contact-QUANGOFF.html', function(){
    return Redirect::to('/', 301);
});

Route::get('/{PageName}','StaticPageController@index');


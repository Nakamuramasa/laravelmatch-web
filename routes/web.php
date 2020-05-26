<?php
Route::prefix('users')->name('users.')->middleware('auth')->group(function () {
    Route::get('/show/{user}', 'UserController@show')->name('show');
    Route::get('/edit/{user}', 'UserController@edit')->name('edit');
    Route::post('/update/{user}', 'UserController@update')->name('update');
});

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/matching', 'MatchingController@index')->name('matching')->middleware('auth');
Route::prefix('chat')->name('chat.')->middleware('auth')->group(function () {
    Route::post('/show', 'ChatController@show')->name('show');
    Route::post('/chat', 'ChatController@chat')->name('chat');
});

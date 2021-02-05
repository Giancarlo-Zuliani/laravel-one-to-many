<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , 'MainController@index')
    -> name('home');

Route::get('/show/{id}' , 'MainController@show')
    -> name('show');
    
Route::get('/create-task' , 'MainController@createTask')
    -> name('create-task');

Route::post('/store' , 'MainController@store')
    -> name('store-task');

Route::get('/edit-task/{id}' , 'Maincontroller@editTask')
    -> name('edit-task');

Route::post('/update/{id}' , 'MainController@update')
    -> name('update-task');
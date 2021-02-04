<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , 'MainController@index')
    -> name('index');

Route::get('/show/{id}' , 'MainController@show')
    -> name('show');
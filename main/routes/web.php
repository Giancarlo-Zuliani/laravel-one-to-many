<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
});

    /* INDEX */
Route::get('/employee' , 'EmployeeController@index')
    -> name('employee-index');

Route::get('/task' , 'TaskController@index')
    -> name('task-index');

Route::get('/typology' , 'TypologyController@index')
    -> name('typology-index');

    /* SHOW */
Route::get('/employee/{id}' , 'EmployeeController@show')
    ->name('employee-show');
Route::get('/task/{id}' , 'TaskController@show')
    ->name('task-show');
Route::get('/typology/{id}' , 'typologyController@show')
    ->name('typology-show');
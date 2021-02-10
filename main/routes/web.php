<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
}) -> name('index');

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

    /* CREATE */
Route::get('/employee-create' , 'EmployeeController@create')
    ->name('employee-create');
Route::get('/task-create' , 'TaskController@create')
    ->name('task-create');
Route::get('/typology-create' , 'TypologyController@create')
    ->name('typology-create');

    /* STORE */
Route::post('/store-employee' , 'EmployeeController@store')
    ->name('employee-store');
Route::post('/task-store' , 'TaskController@store')
    ->name('task-store');
Route::post('/store-typology' , 'TypologyController@store')
    ->name('typology-store');

    /* EDIT */
Route::get('/edit/employee/{id}', 'EmployeeController@edit') 
    -> name('employee-edit');
Route::get('/edit/task/{id}', 'TaskController@edit') 
    -> name('task-edit');
Route::get('/edit/typology/{id}', 'TypologyController@edit') 
    -> name('typology-edit');
    
    /* UPDATE */
Route::post('/update/employee/{id}', 'EmployeeController@update') 
    -> name('employee-update');
Route::post('/update/task/{id}', 'TaskController@update') 
    -> name('task-update');
Route::post('/update/typology/{id}', 'TypologyController@update') 
    -> name('typology-update');
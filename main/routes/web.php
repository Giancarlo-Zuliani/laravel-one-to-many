<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/employee' , 'EmployeeController@index')
    -> name('employee-index');

Route::get('/task' , 'TaskController@index')
    -> name('task-index');

Route::get('/typology' , 'TypologyController@index')
    -> name('typology-index');
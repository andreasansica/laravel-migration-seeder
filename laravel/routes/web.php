<?php

use Illuminate\Support\Facades\Route;



Route::get('/employee', 'EmployeeController@index')
    -> name('employee-index');
Route::get('/employee/{id}', 'EmployeeController@show')
    -> name('employee-show');

Route::get('/brand', 'BrandController@index')
    -> name('brand-index');
Route::get('/brand/{id}', 'BrandController@show')
    -> name('brand-show');

Route::get('/office', 'OfficeController@index')
    -> name('office-index');
Route::get('/office/{id}', 'OfficeController@show')
    -> name('office-show');

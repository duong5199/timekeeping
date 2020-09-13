<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('employees.employees');
// });
Route::get(
	'/',
	'StatisticalController@index');


Route::get(
	'/Employees',
	'EmployeesController@Employees');

Route::match(['GET','POST'],
    '/employee/detail/{id?}',
    'EmployeesController@EmployeesDetail');

// Route::match(['GET','POST'],
//     '/family-relationship',
//     'EmployeesController@FamilyRelationship');


Route::get(
	'/timekeeping',
	'TimekeepingController@timekeeping');

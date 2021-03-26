<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/employees", 'EmployeeController@findAll');
Route::get("/employees/{id}", 'EmployeeController@findById');

Route::get("/departments", 'DepartmentController@findAll');
Route::get("/departments/{id}", 'DepartmentController@findById');

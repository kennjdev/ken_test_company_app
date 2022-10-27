<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/companies', [\App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/company-detail/{company}', [\App\Http\Controllers\CompanyController::class, 'show']);
Route::get('/add-company', [\App\Http\Controllers\CompanyController::class, 'create']);
Route::post('/company', [\App\Http\Controllers\CompanyController::class, 'store']);
Route::post('/add_employee', [\App\Http\Controllers\CompanyController::class, 'add_employee']);

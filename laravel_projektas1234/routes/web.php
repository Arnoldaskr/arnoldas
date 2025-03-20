<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/client', [ClientController::class, 'index']);
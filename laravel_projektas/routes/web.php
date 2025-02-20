<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Collatzkontroleris;

Route::get('/', function () {
    return view('test');
});


Route::get('/collatz', [Collatzkontroleris::class, 'input']);
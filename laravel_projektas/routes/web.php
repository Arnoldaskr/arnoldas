<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Mail;
use App\Mail\PDFMail;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('students/trashed', [StudentController::class, 'trashed'])->name('students.trashed');
Route::post('students/{id}/restore', [StudentController::class, 'restore'])->name('students.restore');
Route::delete('students/{id}/forceDelete', [StudentController::class, 'forceDelete'])->name('students.forceDelete');
Route::get('/test', [StudentController::class, 'index']);
Route::resource('students', StudentController::class);
Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);

require __DIR__.'/auth.php';

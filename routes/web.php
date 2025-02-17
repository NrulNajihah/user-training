<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\EnrollController;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Index Route
Route::get('/index', function () {
    return view('index');
})->name('index');

// User Routes (Using Route Grouping for Consistency)
Route::prefix('user')->name('user.')->group(function () {
    // Show the program management page
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::post('/store', [UserController::class, 'store'])->name('store');

    Route::post('/get-user-id', [EnrollController::class, 'getUserId'])->name('getUserId');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/course', function () {
    return view('course');
})->name('course');

// Course Routes (Using Route Grouping for Consistency)
Route::prefix('course')->name('course.')->group(function () {
    // Show the course management page
    Route::get('/', [CourseController::class, 'index'])->name('index');

    Route::post('/store', [CourseController::class, 'store'])->name('store');

    // Update an existing course
    Route::put('{cID}', [CourseController::class, 'update'])->name('update');

    Route::delete('{cID}',[CourseController::class, 'destroy'])->name('destroy');
});

Route::get('/program', function () {
    return view('program');
})->name('program');

// Program Routes (Using Route Grouping for Consistency)
Route::prefix('program')->name('program.')->group(function () {
    // Show the program management page
    Route::get('/', [ProgramController::class, 'list'])->name('list');

    Route::post('/store', [ProgramController::class, 'store'])->name('store');

    // Update an existing course
    Route::put('{pID}', [ProgramController::class, 'update'])->name('update');

    Route::delete('{pID}',[ProgramController::class, 'destroy'])->name('destroy');

    Route::post('/get-programs', [EnrollController::class, 'getPrograms'])->name('program.getPrograms');
});

Route::get('/date', function () {
    return view('date');
})->name('date');

// Course Routes (Using Route Grouping for Consistency)
Route::prefix('date')->name('date.')->group(function () {
    // Show the program management page
    Route::get('/', [DateController::class, 'list'])->name('list');

    Route::post('/store', [DateController::class, 'store'])->name('store');

    // Update an existing course
    Route::put('{dID}', [DateController::class, 'update'])->name('update');

    Route::delete('{dID}',[DateController::class, 'destroy'])->name('destroy');

});

Route::get('/enrollment', function () {
    return view('enrollment');
})->name('enrollment');

// Grouped routes for enrollment
Route::prefix('enrollment')->name('enrollment.')->group(function () {
    Route::get('/', [EnrollController::class, 'list'])->name('list');

    Route::get('/list', [EnrollController::class, 'list'])->name('list');

    Route::post('/store', [EnrollController::class, 'store'])->name('store');
});


Route::post('/get-dates', [EnrollController::class, 'getDates'])->name('date.getDates');




// Success Page (Optional)
Route::get('/success', function () {
    return view('success');
})->name('success');


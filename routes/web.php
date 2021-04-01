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

Route::get('/', function () {
    return view('admin.index');
});

Route::prefix('schedule')->group(function () {
    Route::get('list-schedule', [\App\Http\Controllers\ScheduleController::class, 'index'])->name('list_schedule');
    Route::post('search',[\App\Http\Controllers\ScheduleController::class,'search'])->name('search_schedule');
    Route::get('create-schedule',[\App\Http\Controllers\ScheduleController::class,'create'])->name('create_schedule');
    Route::post('create-schedule',[\App\Http\Controllers\ScheduleController::class,'store'])->name('store_schedule');
    Route::get('delete/{id}', [\App\Http\Controllers\ScheduleController::class,'destroy'])->name('delete_schedule');
    Route::get('edit/{id}', [\App\Http\Controllers\ScheduleController::class, 'edit'])->name('edit_schedule');
    Route::post('edit/{id}',[\App\Http\Controllers\ScheduleController::class,'update'])->name('update_schedule');
});

Route::prefix('anket')->group(function () {
    Route::get('list-anket', [\App\Http\Controllers\AnketController::class, 'index'])->name('list_anket');
    Route::post('search',[\App\Http\Controllers\AnketController::class,'search'])->name('search_anket');
//    Route::get('create-schedule',[\App\Http\Controllers\ScheduleController::class,'create'])->name('create_schedule');
//    Route::post('create-schedule',[\App\Http\Controllers\ScheduleController::class,'store'])->name('store_schedule');
    Route::get('show-detail/{id}', [\App\Http\Controllers\AnketController::class,'show'])->name('detail_anket');
//    Route::get('edit/{id}', [\App\Http\Controllers\ScheduleController::class, 'edit'])->name('edit_schedule');
//    Route::post('edit/{id}',[\App\Http\Controllers\ScheduleController::class,'update'])->name('update_schedule');
});

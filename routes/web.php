<?php

use Illuminate\Support\Facades\Route;

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/get-message', [\App\Http\Controllers\IsReadController::class, 'index']);
Route::get('/chat', [\App\Http\Controllers\ChatController::class, 'index'])->name('chat');
Route::post('/chat', [\App\Http\Controllers\ChatController::class, 'store'])->name('chat.store');
Route::resource('/templates', \App\Http\Controllers\TemplateController::class)->names('templates');
Route::resource('/history', \App\Http\Controllers\HistoryController::class)->names('history');

Route::post('/contact', function (Illuminate\Http\Request $request) {
    // Логика за контактната форма
})->name('contact.send');

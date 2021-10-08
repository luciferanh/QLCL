<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NhanvienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', [AdminController::class,'index']);
Route::post('admin/store', [AdminController::class,'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin') ->group(function(){
        Route::get('home',[AdminController::class, 'home'])->name('admin');
        Route::get('add',[NhanvienController::class, 'create']);
        Route::post('add',[NhanvienController::class, 'up']);
        Route::get('list',[NhanvienController::class, 'index']);
    });
});

<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', [AdminController::class,'index']);
Route::post('admin/store', [AdminController::class,'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin') ->group(function(){
        Route::get('home',[AdminController::class, 'home'])->name('admin');
    });
});

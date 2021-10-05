<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', [AdminController::class,'index'])->name('login');
Route::post('admin/login/store', [AdminController::class,'store']);

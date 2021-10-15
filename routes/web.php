<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoPhanController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\NhanVienProJectController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    dd(bcrypt('123456'));
    return view('welcome');
});
Route::get('admin/login', [AdminController::class,'index']);
Route::post('admin/store', [AdminController::class,'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin') ->group(function(){
        #home và thêm nhân viên
        Route::get('home',[AdminController::class, 'home'])->name('admin');
        Route::get('add',[NhanvienController::class, 'create']);
        Route::post('add',[NhanvienController::class, 'up']);
        #Xem danh sách nhân viên

        Route::get('edit/{menu}',[NhanvienController::class, 'show']);
        Route::post('edit/{menu}',[NhanvienController::class, 'update']);
        Route::DELETE('destroy',[NhanvienController::class, 'destroy']);

        #Bo Phan
        Route::get('bophan',[BoPhanController::class, 'index']);
        Route::get('bp-add',[BoPhanController::class, 'create']);
        Route::post('bp-add',[BoPhanController::class, 'up']);
        #project
        Route::prefix('project') ->group(function() {
            Route::get('/',[ProjectController::class, 'index']);
            Route::get('add',[ProjectController::class, 'create']);
            Route::post('add',[ProjectController::class, 'up']);
            Route::get('setnv/{menu}',[ProjectController::class, 'setnv']);

        });
        Route::DELETE('destroy1',[ProjectController::class, 'destroy']);
        #Du an và nhân viên
        Route::get('nv-pj',[NhanVienProJectController::class, 'SetNV_PJ']);
    });
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login',[
            'title'=> 'Đăng nhập Admin'
        ]);
    }
    public function store(Request $request){
        dd($request);
    }
}
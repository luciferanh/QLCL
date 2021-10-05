<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login',[
            'title'=> 'Đăng nhập Admin'
        ]);
    }
    public function home(){
        return view('home');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);
        $mang = [
            'email' =>$request['email'],
            'password' => $request['password']
        ];
        $is_true=Auth::attempt($mang);
        if($is_true == true){

            return redirect()->route('admin');

        }
        $request->session()->flash('error', 'Email hoặc password không đúng');
        return redirect()->back();

    }
}

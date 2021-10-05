<?php

namespace App\Http\Controllers;

use App\Service\CheckAdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $check_admin;
    public function __construct(CheckAdminService $check_admin){
        $this->check_admin = $check_admin;
    }
    public function index(){
        return view('admin.login',[
            'title'=> 'Đăng nhập Admin'
        ]);
    }
    public function home(Request $request){
        $mang = [
            'title' => $request['title'],
            'is_admin' => $request['is_admin']
        ];
        return view('home',$mang);
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
            $is_admin = $this->check_admin->get($mang);
            return redirect()->route('admin',[
                'title' => 'Home',
                'is_admin' => $is_admin
            ]);

        }
        $request->session()->flash('error', 'Email hoặc password không đúng');
        return redirect()->back();
    }
   
}

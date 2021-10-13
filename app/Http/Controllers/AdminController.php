<?php

namespace App\Http\Controllers;

use App\Service\CheckAdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            'title' =>$request['title'],
            'is_admin' => $request['is_admin']
        ];
        if($mang['is_admin']=='2'){
            return view('home',$mang);

        }
        else{
            return view('admin.NhanVien.list',[
                'title' => $request['title'],
                'menus' => $this->check_admin->getAll(),
                'is_admin'=> $request['is_admin']
            ]);
        }

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
            Session::put('is_admin',$is_admin);
            return redirect()->route('admin',[
                'title' => 'Home',
            ]);

        }
        $request->session()->flash('error', 'Email hoặc password không đúng');
        return redirect()->back();
    }

}

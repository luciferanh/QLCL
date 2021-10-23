<?php

namespace App\Http\Controllers;

use App\Models\BoPhan;
use App\Models\ChuanNangSuat;
use App\Service\CheckAdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use PhpOption\None;

class AdminController extends Controller
{
    protected $check_admin;
    public function __construct(CheckAdminService $check_admin){
        $this->check_admin = $check_admin;
    }
    public function index(){
        if(User::where('email','admin@localhost.com')->first()==null){
            //Admin
            $data_user = [

                [
                    'name'=>'Admin', 
                    'email'=> 'admin@localhost.com',
                    'is_admin'=>(string) 1, 'password' =>(string) bcrypt('123456'), 
                    'sdt'=>(string) 'None', 
                    'date_start'=>(string) date('Y-m-d',strtotime('01-01-01')), 
                    'chuc_vu'=>(string) 'None'],
                [
                    'name'=>(string) 'Anh',
                    'email'=>(string) 'anh@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-04-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'Thao',
                    'email'=>(string) 'thao@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-05-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'Khue',
                    'email'=>(string) 'khue@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-02-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'phuong',
                    'email'=>(string) 'phuong@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-07-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'nguyen',
                    'email'=>(string) 'nguyen@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-11-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'tran',
                    'email'=>(string) 'tran@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-5-2021')),
                   'chuc_vu'=>(string) 'member'
                ],                [
                    'name'=>(string) 'hoang',
                    'email'=>(string) 'hoang@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-03-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'viet',
                    'email'=>(string) 'viet@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-08-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'nhat',
                    'email'=>(string) 'nhat@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-12-2021')),
                   'chuc_vu'=>(string) 'member'
                ],
                [
                    'name'=>(string) 'meo',
                    'email'=>(string) 'meo@localhost.com',
                    'is_admin'=>(string) 2,
                    'password' =>(string)  bcrypt('123456'),
                   'sdt'=>(string) '0123456789',
                   'date_start'=>(string) date('Y-m-d',strtotime('23-6-2021')),
                   'chuc_vu'=>(string) 'member'
                ] 
            ];
            User::insert($data_user); // Eloquent approach
            $data_NS=[
                ['thang'=> '1','nangsuat'=>70],
                ['thang'=> '2','nangsuat'=>71],
                ['thang'=> '3','nangsuat'=>72],
                ['thang'=> '4','nangsuat'=>73],
                ['thang'=> '5','nangsuat'=>74],
                ['thang'=> '6','nangsuat'=>75],
                ['thang'=> '7','nangsuat'=>76],
                ['thang'=> '8','nangsuat'=>77],
                ['thang'=> '9','nangsuat'=>78],
                ['thang'=> '10','nangsuat'=>79],
                ['thang'=> '11','nangsuat'=>80],
                ['thang'=> '12','nangsuat'=>81]
            ];
            ChuanNangSuat::insert($data_NS);
            $data_bo_phan = [
                    ['name'=>'Tai Chinh'], ['name'=>'Nhan Su'], ['name'=>'Ke Toan'], ['name'=>'Cong Nghe']
            ];
            BoPhan::insert($data_bo_phan);
        }
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

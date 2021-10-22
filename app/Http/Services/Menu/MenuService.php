<?php

namespace app\Http\Services\Menu;
use App\Models\ngaycong;
use app\Models\User;
use Illuminate\Support\Facades\Session;


class MenuService
{
    public function create($request)
    {
       try{ User::create([
            'name'=>(string) $request->input('name'),
            'email'=>(string)  $request->input('email'),
            'is_admin'=>(string) $request->input('is_admin'),
            'password' =>(string) bcrypt($request->input('password')),
           'sdt'=>(string) $request->input('sdt'),
           'date_start'=>(string) date('Y-m-d',strtotime($request->input('date_start'))),
           'chuc_vu'=>(string) $request->input('chuc_vu')
        ]);
        Session::flash('success',"Tạo Thành Công ");
    }catch(\Exception $err){
        Session::flash('error',$err->getMessage());
        return false;
    }
    return true;

    }

    public function getAll()
    {
        return User::orderbyDesc('id')->paginate(20);
    }
    public function update($request,$menu) : bool
    {
        $menu->name =(string) $request->input('name');
        $menu->email =(string)  $request->input('email');
        $menu->is_admin =(string) $request->input('is_admin');
        $menu->password =(string) $menu->password;
        $menu->sdt=(string) $request->input('sdt');
        $menu->date_start=(string) date('Y-m-d',strtotime($request->input('date_start')));
        $menu->chuc_vu=(string) $request->input('chuc_vu');
        $menu->save();
        Session::flash('success','Cập nhập thành công');
        return true;
    }

    public function destroy($request)
    {
        $id=(int) $request->input('id');
        $menu=User::where('id',$id)->first();
        if($menu){
            return User::where('id',$id)->delete();
        }
        return false;
    }
    public function getAllName()
    {
        return User::orderbyDesc('id','name','is_admin')->paginate(20);
    }

    public function createngaycong($request)
    {  $mang=['1'=>$request['T1'],'2'=>$request['T2'],'3'=>$request['T3'],'4'=>$request['T4'],'5'=>$request['T5'],'6'=>$request['T6'],'7'=>$request['T7'],'8'=>$request['T8'],'9'=>$request['T9'],'10'=>$request['T10'],'11'=>$request['T11'],'12'=>$request['T12']];
        try{  
        foreach ($mang as $key => $value) { 
        ngaycong::create([
            'nam'=>(string)  $request->input('nam'),
            'thang'=>(string)  $key,
            'ngay'=>(string)  $value,     
        ]);
        }    
        Session::flash('success',"Tạo Thành Công ");
    }catch(\Exception $err){
        Session::flash('error',$err->getMessage());
        return false;
    }
    return true;

    }
  

}

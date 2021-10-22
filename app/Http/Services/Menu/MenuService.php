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
    {
       try{ ngaycong::create([
            'nv_id'=>(string) $request->input('nv_id'),
            'thang1'=>(string)  $request->input('ngay1'),
            'thang2'=>(string)  $request->input('ngay2'),
            'thang3'=>(string)  $request->input('ngay3'),
            'thang4'=>(string)  $request->input('ngay4'),
            'thang5'=>(string)  $request->input('ngay5'),
            'thang6'=>(string)  $request->input('ngay6'),
            'thang7'=>(string)  $request->input('ngay7'),
            'thang8'=>(string)  $request->input('ngay8'),
            'thang9'=>(string)  $request->input('ngay9'),
            'thang10'=>(string)  $request->input('ngay10'),
            'thang11'=>(string)  $request->input('ngay11'),
            'thang12'=>(string)  $request->input('ngay12'),        
        ]);
        Session::flash('success',"Tạo Thành Công ");
    }catch(\Exception $err){
        Session::flash('error',$err->getMessage());
        return false;
    }
    return true;

    }
    public function getngaycong()
    {
      
    }

}

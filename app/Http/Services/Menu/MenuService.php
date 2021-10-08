<?php

namespace app\Http\Services\Menu;
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
            'password'=>(string) bcrypt($request->input('password'))
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
        $menu->password =(string) bcrypt($request->input('password'));
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

}

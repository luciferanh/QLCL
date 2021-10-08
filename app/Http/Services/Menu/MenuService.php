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

}

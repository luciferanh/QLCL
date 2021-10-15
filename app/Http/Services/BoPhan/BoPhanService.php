<?php

namespace App\Http\Services\BoPhan;

use App\Models\BoPhan;
use Illuminate\Support\Facades\Session;

class BoPhanService
{
    public function getAll()
    {
        return BoPhan::orderbyDesc('id')->paginate(20);
    }
    public function create($request)
    {
        try{
            BoPhan::create([
                'name'=>(string) $request->input('name'),
            ]);
            Session::flash('success',"Tạo Thành Công ");
        }catch(\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;

    }
}

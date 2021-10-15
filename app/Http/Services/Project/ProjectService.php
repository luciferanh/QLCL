<?php

namespace app\Http\Services\Project;

use App\Models\Project;
use Illuminate\Support\Facades\Session;
class ProjectService
{
    public function create($request)
    {
       try{ Project::create([
            'name'=>(string) $request->input('name'),
            'description'=>(string)  $request->input('description'),
            'content'=>(string) $request->input('content'),
           'date_start'=>(string)  date('Y-m-d',strtotime($request->input('date_start'))),
           'date_end'=>(string)  date('Y-m-d',strtotime($request->input('date_end')))  
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
        return Project::orderbyDesc('id')->paginate(20);
    }
    
    public function destroy($request)
    {
        $id=(int) $request->input('id');
        $menu=Project::where('id',$id)->first();
        if($menu){
            return Project::where('id',$id)->delete();
        }
        return false;
    }

}
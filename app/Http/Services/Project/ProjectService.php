<?php

namespace app\Http\Services\Project;

use App\Models\BoPhan;
use App\Models\NhanVienProJect;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class ProjectService
{
    public function create($request)
    {
       try{

           Project::create([
            'name'=>(string) $request->input('name'),
            'description'=>(string)  $request->input('description'),
            'content'=>(string) $request->input('content'),
            'bophan_id'=> $request->input('bophan_id'),
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
    public function show_bophan()
    {
        return BoPhan::select('id','name')->orderbyDesc('id')->paginate(20);

    }
    public function get()
    {
        return Project::with('bophan')->orderbyDesc('id')->paginate(20);

    }

    public function getProject($id)
    {
        return Project::where('id',$id)->first();

    }

    public function getNVPJ($id)
    {
        return NhanVienProJect::where('id',$id)->with('nhanvien');
    }

    public function getNV()
    {
        return User::orderbyDesc('id')->where('is_admin',"'2'")->paginate(20);
    }

    public function setNVPJ($id_pj, $id_nvs)
    {
        try{
           foreach($id_nvs as $key=>$value ){
               NhanVienProJect::create([
                   'project_id'=>(string) $id_pj,
                   'nv_id'=>(string) $value,
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

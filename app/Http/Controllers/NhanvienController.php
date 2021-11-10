<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Menu\CreateNV;
use App\Http\Services\Menu\MenuService;
use App\Models\User;
use App\Models\ngaycong;
use App\Models\NhanVienProJect;
use Illuminate\Support\Facades\Session;
class NhanvienController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function create(){

        return view('admin.themnv',[
            'title'=> 'Them nhan vien moi',
        ]);
    }
    public function up(CreateNV $request){

        $result= $this->menuService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.NhanVien.list',[
            'title' =>'Danh sách nhân viên',
            'menus' => $this->menuService->getAll(),
        ]);
    }
    public function show(User $menu)
    {
        return view('admin.NhanVien.edit',[
            'title' =>'Chỉnh sửa thông tin nhân viên'.$menu->name,
            'menu' => $menu,
        ]);
    }
    public function update(User $menu,CreateNV $request )
    {
        
        $this->menuService->update($request,$menu);
        return redirect('/admin/home');
    }
    public function destroy(Request $request)
    {
     
        $result=$this->menuService->destroy($request);
        if($result){
            return response()->json([
                'error'=>false,
                'message'=>'Xóa thành công '
            ]);
        }
        return response()->json([
            'error'=>true
        ]);
    }
    public function viewngaylam()
    {
        return view('admin.NhanVien.ngaylam',[
            'title'=> 'Thêm ngày làm dự kiến ',
        ]);

    }
    public function postviewngaylam(Request $request)
    {
       $result= $this->menuService->createngaycong($request);
       return redirect()->back();
    }
    public function nangsuat(User $menu)
    {
        $result= $this->menuService->TimProJect($menu->id);

        return view('admin.NhanVien.nangsuat',[
            'title' =>'Năng suất của nhân viên '.$menu->name,
            'menus' => $result
        ]);
    }
    public function add_NS(Request $request){
         $a =$request->post();
         try{
            foreach ($a as $key => $value){
                if ($value == "_token") {
                    unset($a[$key]);
                }
                $page = NhanVienProJect::find($key);
                $result=false;
                // Make sure you've got the Page model
                if($page) {
                    $page->nang_suat = $value;
                    $page->save();
                    $result=true;
                }
                
            }
         Session::flash('success',"Tạo Thành Công ");
         return redirect()->back();
         }catch(\Exception $err){
             Session::flash('error',$err->getMessage());
             return redirect()->back();
         }
      
 
    }

}


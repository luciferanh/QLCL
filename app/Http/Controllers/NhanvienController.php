<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Menu\CreateNV;
use App\Http\Services\Menu\MenuService;
use App\Models\User;

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
        $result=$this->menuService->getAllName();
        return view('admin.NhanVien.ngaylam',[
            'title'=> 'Thêm ngày làm dự kiến ',
            'nhanvien'=>$result,
        ]);
        
    }
    public function postviewngaylam(Request $request)
    { 
       $result= $this->menuService->createngaycong($request);
       return redirect()->back();
    }
    
    public function viewlist(){
    
        return view('admin.Nhanvien.list_ngaylam',[
            'title'=> 'Them nhan vien moi',
        ]);
    }
}


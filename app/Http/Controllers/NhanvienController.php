<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Menu\CreateNV;
use App\Http\Services\Menu\MenuService;

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
            'is_admin'=>'1'
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
            'is_admin'=>'1'
        ]);
    }
}


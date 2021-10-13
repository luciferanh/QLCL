<?php

namespace App\Http\Controllers;

use App\Http\Services\BoPhan\BoPhanService;
use Illuminate\Http\Request;

class BoPhanController extends Controller
{
    protected $menuService;
    public function __construct(BoPhanService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function index(){
        return view('admin.BoPhan.list',[
            'title' =>'Danh sách bộ phận',
            'menus' => $this->menuService->getAll()
        ]);
    }
    public function create(){

        return view('admin.BoPhan.add',[
            'title'=> 'Them nhan vien moi',
        ]);
    }
}

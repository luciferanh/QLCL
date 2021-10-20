<?php

namespace App\Http\Controllers;

use app\Http\Services\Project\ProjectService;
use App\Models\ChuanNangSuat;
use App\Models\NhanVienProJect;
use Illuminate\Http\Request;

class NhanVienProJectController extends Controller
{

    public function SetNV_PJ(){
        $danh_sach_nv_pj=NhanVienProJect::orderbyDesc('nv_id')->with('nhanvien')->with('project')->paginate(20);
        $chuan_nangsuat = ChuanNangSuat::orderBy('id','asc')->paginate(20);

        return view('admin.NhanVien.list_NV_PJ',[
            'title' =>'Danh sách nhân viên và Dự Án',
            'nvs' => $danh_sach_nv_pj,
            'nss' => $chuan_nangsuat
        ]);
    }

    //
}

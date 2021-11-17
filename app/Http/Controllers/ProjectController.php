<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Services\Project\ProjectService;
use App\Http\Requests\Menu\CreateProject;

class ProjectController extends Controller
{
    protected $projectService;
    public function __construct(ProjectService $projectService){
        $this->projectService = $projectService;
    }
    public function index(){

        return view('admin.Project.list',[
            'title'=> 'Project',
            'menus'=> $this->projectService->get()
        ]);
    }
    public function create(){
        $bophans=$this->projectService->show_bophan();
        return view('admin.Project.AddProject',[
            'title'=> 'Project',
            'bophans' => $bophans,
        ]);
    }
    public function up(CreateProject $request){
        $result= $this->projectService->create($request);
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result=$this->projectService->destroy($request);
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
    public function setnv($id){
        
        $pj = $this->projectService->getProject($id);
        $nv_hien_co = $this->projectService->getNV();
        $nv_in_pj = $this->projectService->getNVPJ($id);
        return view('admin.Project.AddNV',[
            'title' =>$pj->name,
            'nv_hien_co' => $nv_hien_co,
            'nv_in_pj' => $nv_in_pj
        ]);
    }
    public function up_nv($id_pj,Request $request){
        $id_nv=$request['duallistbox_demo1'];
        $id_ld=$request['leader_id'];
        $this->projectService->setNVPJ($id_pj,$id_nv,$id_ld);
        return redirect()->back();
    }
    public function edit_get($id){
        $pj = $this->projectService->getProject($id);
        $bophans=$this->projectService->show_bophan();
        return view('admin.Project.edit',[
            'title'=> 'Project',
            'bophans' => $bophans,
            'pj' =>$pj 
        ]);
    }
    public function edit_post(Project $menu,Request $request){
        $this->projectService->update($request,$menu);
        return redirect('/admin/project');
    }

}

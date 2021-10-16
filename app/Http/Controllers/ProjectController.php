<?php

namespace App\Http\Controllers;

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
        $nv_in_pj = $this->projectService->getNV($id);
        $nv_hien_co = $this->projectService->getNV($id);
        return view('admin.Project.AddNV',[
            'title' =>$pj->name,
        ]);
    }

}

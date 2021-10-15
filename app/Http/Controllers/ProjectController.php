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
            'menus'=> $this->projectService->getAll()
        ]);
    }
    public function create(){
        return view('admin.Project.AddProject',[
            'title'=> 'Project'
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
       
}

<?php

namespace App\Http\Controllers;

use app\Http\Services\Project\ProjectService;
use Illuminate\Http\Request;

class NhanVienProJectController extends Controller
{
    protected $projectService;
    public function __construct(ProjectService $projectService){
        $this->projectService = $projectService;
    }


    //
}

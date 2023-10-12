<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\StageProject;
use App\Models\EducationalProject;
use App\Models\Writing;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index(StageProject $stage_projects, EducationalProject $educational_projects, Writing $writings )
    {
        $stage_projects = StageProject::all();
        $educational_projects = EducationalProject::all();
        $writings = Writing::all();


        return view('panel', compact('stage_projects','educational_projects','writings') );
    }
}

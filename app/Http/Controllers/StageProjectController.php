<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\StageProject;

class StageProjectController extends Controller
{
    public function index(StageProject $stage_project)
    {
        $stage_projects = StageProject::orderBy('created_at', 'desc')->get();
        return view('stage_projects.index', compact('stage_projects'));
    }
    public function show(StageProject $stage_project)
    {
        return view('stage_projects.show')->with([
            'stage_project' => $stage_project,
        ]);
        
    }
}

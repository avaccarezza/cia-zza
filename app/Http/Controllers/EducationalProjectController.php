<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\EducationalProject;

class EducationalProjectController extends Controller
{
    public function index(EducationalProject $educational_project)
    {
        $educational_projects = EducationalProject::orderBy('created_at', 'desc')->get();
        return view('educational_projects.index', compact('educational_projects'));
    }
    public function show(EducationalProject $educational_project)
    {
        return view('educational_projects.show')->with([
            'educational_project' => $educational_project,
        ]);
        
    }
}

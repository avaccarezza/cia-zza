<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\EducationalProject;
use App\Http\Requests\EducationalProjectRequest;

class EducationalProjectPanelController extends Controller
{
    public function index()
    {
        $educational_projects = EducationalProject::all();
        return view('educational_projects.index', compact('educational_projects') );
    }
    public function create()
    {
        return view('panel.educational_projects.create');
    }
    public function store( EducationalProjectRequest $request)
    {
        $educational_project = EducationalProject::create($request->validated());
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto pedagógico {$educational_project->title} fue creado");
    }    
}

<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\ArtisticProject;
use App\Http\Requests\ArtisticProjectRequest;

class ArtisticProjectPanelController extends Controller
{
   
    public function create()
    {
        return view('panel.artistic_projects.create');
    }
    public function store( ArtisticProjectRequest $request)
    {
        $artistic_project = ArtisticProject::create($request->validated());
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto artístico {$artistic_project->title} fue creado");
    }    
}

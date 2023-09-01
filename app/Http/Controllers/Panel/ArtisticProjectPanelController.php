<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\ArtisticProject;
use App\Http\Requests\ArtisticProjectRequest;

class ArtisticProjectPanelController extends Controller
{
    public function index()
    {
        $artistic_projects = ArtisticProject::all();
        return view('artistic_projects.index', compact('artistic_projects') );
    }
    public function create()
    {
        return view('panel.artistic_projects.create');
    }
    public function store( ArtisticProjectRequest $request)
    {
        $artistic_project = ArtisticProject::create($request->validated());

        foreach ($request->images as $image) 
        {
            $artistic_project->images()->create([
                'path' => 'images/' . $image->store('artistic_projects', 'images'),
            ]);
        }
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto artístico {$artistic_project->title} fue creado");
    }    

    public function destroy(ArtisticProject $artistic_project)
    {
        $artistic_project->delete();

        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto artistico {$artistic_project->title} fue eliminado");
    }   
}

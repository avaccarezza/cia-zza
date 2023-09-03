<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\ArtisticProject;
use App\Http\Requests\ArtisticProjectRequest;
use Illuminate\Support\Facades\File;
class ArtisticProjectPanelController extends Controller
{
    public function index(ArtisticProject $artistic_project)
    {
        return view('panel')->with([
            'artistic_project' => $artistic_project,
        ]);
    }
    public function create()
    {
        return view('panel.artistic_projects.create');
    }
    public function store(ArtisticProjectRequest $request)
    {
        $artistic_project = ArtisticProject::create($request->validated());
    
        if ($artistic_project->images) {
            foreach ($artistic_project->images as $image) {
                $path = storage_path("app/public/artistic_projects/{$image->path}");
                File::delete($path);
                $image->delete();
            }
        }
        if ($request->hasFile('images') && is_array($request->images)) {
            foreach ($request->images as $image) {
                $artistic_project->images()->create([
                    'path' => 'images/' . $image->store('artistic_projects', 'images'),
                ]);
            }
        }
    
        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto artístico {$artistic_project->title} fue creado");
    }
     

    public function edit(ArtisticProject $artistic_project)
    {
        return view('panel.artistic_projects.edit')->with([
            'artistic_project' => $artistic_project,
        ]);
    }
    public function update( ArtisticProjectRequest $request, ArtisticProject $artistic_project )
    {
       
        $artistic_project->update($request->validated());

        if ($request->hasFile('images')) {
            foreach ($artistic_project->images as $image) {
                $path = storage_path("app/public/artistic_projects{$image->path}");

                File::delete($path);

                $image->delete();
            }

            foreach ($request->images as $image) {
                $artistic_project->images()->create([
                    'path' => 'images/' . $image->store('artistic_projects', 'images'),
                ]);
            }
        }
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto artístico {$artistic_project->title} fue editado");
    }    
    public function destroy(ArtisticProject $artistic_project)
    {
        $artistic_project->delete();

        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto artístico {$artistic_project->title} fue eliminado");
    }   
}

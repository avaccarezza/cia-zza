<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\StageProject;
use App\Http\Requests\StageProjectRequest;
use Illuminate\Support\Facades\File;
class StageProjectPanelController extends Controller
{
    public function index(StageProject $stage_project)
    {
        return view('panel')->with([
            'stage_project' => $stage_project,
        ]);
    }
    public function create()
    {
        return view('panel.stage_projects.create');
    }
    public function store(StageProjectRequest $request)
    {
        $stage_project = StageProject::create($request->validated());

        if ($stage_project->images) {
            foreach ($stage_project->images as $image) {
            dd($image->path);
                $path = storage_path("app/public/stage_projects/{$image->path}");
                File::delete($path);
                $image->delete();
            }
        }
        if ($request->hasFile('images') && is_array($request->images)) {
            foreach ($request->images as $image) {
                $stage_project->images()->create([
                    'path' => 'images/' . $image->store('stage_projects', 'images'),
                ]);
            }
        }
    
        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto artístico {$stage_project->title} fue creado");
    }
     

    public function edit(StageProject $stage_project)
    {
        return view('panel.stage_projects.edit')->with([
            'stage_project' => $stage_project,
        ]);
    }
    public function update( StageProjectRequest $request, StageProject $stage_project )
    {
       
        $stage_project->update($request->validated());

        if ($request->hasFile('images')) {
            foreach ($stage_project->images as $image) {
                $path = storage_path("app/public/stage_projects{$image->path}");

                File::delete($path);

                $image->delete();
            }

            foreach ($request->images as $image) {
                $stage_project->images()->create([
                    'path' => 'images/' . $image->store('stage_projects', 'images'),
                ]);
            }
        }
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto artístico {$stage_project->title} fue editado");
    }    
    public function destroy(StageProject $stage_project)
    {
        $stage_project->delete();

        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto artístico {$stage_project->title} fue eliminado");
    }   
}

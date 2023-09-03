<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\EducationalProject;
use App\Http\Requests\EducationalProjectRequest;
use Illuminate\Support\Facades\File;
class EducationalProjectPanelController extends Controller
{
    public function index(EducationalProject $educational_project)
    {
        return view('panel')->with([
            'educational_project' => $educational_project,
        ]);
    }
    public function create()
    {
        return view('panel.educational_projects.create');
    }
    public function store(EducationalProjectRequest $request)
{
    $educational_project = EducationalProject::create($request->validated());

    if ($educational_project->images) {
        foreach ($educational_project->images as $image) {
            $path = storage_path("app/public/educational_projects/{$image->path}");
            File::delete($path);
            $image->delete();
        }
    }

    if ($request->hasFile('images') && is_array($request->images)) {
        foreach ($request->images as $image) {
            $educational_project->images()->create([
                'path' => 'images/' . $image->store('educational_projects', 'images'),
            ]);
        }
    }

    return redirect()
        ->route('panel')
        ->withSuccess("El proyecto pedagógico {$educational_project->title} fue creado");
}


    public function edit(EducationalProject $educational_project)
    {
        return view('panel.educational_projects.edit')->with([
            'educational_project' => $educational_project,
        ]);
    }
    public function update( EducationalProjectRequest $request, EducationalProject $educational_project )
    {
       
        $educational_project->update($request->validated());

        if ($request->hasFile('images')) {
            foreach ($educational_project->images as $image) {
                $path = storage_path("app/public/educational_projects{$image->path}");

                File::delete($path);

                $image->delete();
            }

            foreach ($request->images as $image) {
                $educational_project->images()->create([
                    'path' => 'images/' . $image->store('educational_projects', 'images'),
                ]);
            }
        }
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto pedagógico {$educational_project->title} fue editado");
    }    
    public function destroy(EducationalProject $educational_project)
    {
        $educational_project->delete();

        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto pedagógico {$educational_project->title} fue eliminado");
    }   
}

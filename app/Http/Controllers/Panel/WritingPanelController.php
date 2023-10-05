<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Models\Writing;
use App\Http\Requests\WritingRequest;
use Illuminate\Support\Facades\File;
class WritingPanelController extends Controller
{
    public function index(Writing $writing)
    {
        return view('panel')->with([
            'writing' => $writing,
        ]);
    }
    public function create()
    {
        return view('panel.writings.create');
    }
    public function store(WritingRequest $request)
{
    $writing = Writing::create($request->validated());

    if ($writing->images) {
        foreach ($writing->images as $image) {
            $path = storage_path("app/public/writings/{$image->path}");
            File::delete($path);
            $image->delete();
        }
    }

    if ($request->hasFile('images') && is_array($request->images)) {
        foreach ($request->images as $image) {
            $writing->images()->create([
                'path' => 'images/' . $image->store('writings', 'images'),
            ]);
        }
    }

    return redirect()
        ->route('panel')
        ->withSuccess("El proyecto pedagógico {$writing->title} fue creado");
}


    public function edit(Writing $writing)
    {
        return view('panel.writings.edit')->with([
            'writing' => $writing,
        ]);
    }
    public function update( WritingRequest $request, Writing $writing )
    {
       
        $writing->update($request->validated());

        if ($request->hasFile('images')) {
            foreach ($writing->images as $image) {
                $path = storage_path("app/public/writings{$image->path}");

                File::delete($path);

                $image->delete();
            }

            foreach ($request->images as $image) {
                $writing->images()->create([
                    'path' => 'images/' . $image->store('writings', 'images'),
                ]);
            }
        }
        
        return redirect()
        ->route('panel')
        ->withSuccess("El proyecto pedagógico {$writing->title} fue editado");
    }    
    public function destroy(Writing $writing)
    {
        $writing->delete();

        return redirect()
            ->route('panel')
            ->withSuccess("El proyecto pedagógico {$writing->title} fue eliminado");
    }   
}

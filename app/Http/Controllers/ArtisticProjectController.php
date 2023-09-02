<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ArtisticProject;

class ArtisticProjectController extends Controller
{
    public function index(ArtisticProject $artistic_project)
    {
        $artistic_projects = ArtisticProject::orderBy('created_at', 'desc')->get();
        return view('artistic_projects.index', compact('artistic_projects'));
    }
    public function show(ArtisticProject $artistic_project)
    {
        return view('artistic_projects.show')->with([
            'artistic_project' => $artistic_project,
        ]);
        
    }
}

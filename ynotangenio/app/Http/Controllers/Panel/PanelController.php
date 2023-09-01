<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\ArtisticProject;
use App\Models\EducationalProject;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index(ArtisticProject $artistic_projects, EducationalProject $educational_projects )
    {
        $artistic_projects = ArtisticProject::all();
        $educational_projects = EducationalProject::all();

        return view('panel', compact('artistic_projects','educational_projects') );
    }
}

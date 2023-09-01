<?php

namespace App\Http\Controllers;

use App\Models\ArtisticProject;
use Illuminate\Http\Request;

class ArtisticProjectController extends Controller
{
    public function index()
    {
       $artistic_projects = ArtisticProject::all();
        return view('artistic_projects.index', compact('artistic_projects') );
    }
}

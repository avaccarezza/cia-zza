<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalProjectController extends Controller
{
    public function index()
    {
        return view('educational_projects.index');
    }
}

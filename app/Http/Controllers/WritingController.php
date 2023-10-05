<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writing;

class WritingController extends Controller
{
    public function index(Writing $writing)
    {
        $writings = Writing::orderBy('created_at', 'desc')->get();
        return view('writings.index', compact('writings'));
    }
    public function show(Writing $writing)
    {
        return view('writings.show')->with([
            'writing' => $writing,
        ]);
        
    }
}

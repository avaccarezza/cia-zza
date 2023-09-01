<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
{
    $language = $request->input('language');
        
        if (in_array($language, ['es', 'fr', 'en'])) {
            App::setLocale($language);
        }
        
        return back();
}
}

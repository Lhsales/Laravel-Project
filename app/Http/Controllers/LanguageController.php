<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\LanguageType;

class LanguageController extends Controller
{
    function Index()
    {
        $languages = Language::all();

        return view('languages.index', compact('languages'));
    }

    function Types()
    {
        $list = LanguageType::all();

        return view('languages.types.index', compact('list'));
    }

    function Edit()
    {
        
    }
}

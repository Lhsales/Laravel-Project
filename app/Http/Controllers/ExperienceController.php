<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Experience;

class ExperienceController extends Controller
{
    
    public function Index()
    {
        $list = Experience::all();

        return view('experiences.index', compact('list'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\LanguageType;
use Redirect;

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

    function CreateType()
    {
        return view('languages.types.create');
    }

    function SaveType(Request $req)
    {
        $data = $req->all();

        LanguageType::create($data);

        return Redirect::route('admin.languages.types.index')
                       ->with('message', 'Tipo de linguagem criado com sucesso!')
                       ->with('alert-class', 'success');
    }

    function EditType()
    {
        
    }
}

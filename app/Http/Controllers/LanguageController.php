<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\LanguageType;
use Redirect;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('ensure.exist.languagetype')->only('EditType', 'UpdateType');
    }

    public function Index()
    {
        $languages = Language::all();

        return view('languages.index', compact('languages'));
    }

    public function Types()
    {
        $list = LanguageType::all();

        return view('languages.types.index', compact('list'));
    }

    public function CreateType()
    {
        return view('languages.types.create');
    }

    public function SaveType(Request $req)
    {
        $data = $req->all();

        LanguageType::create($data);

        return Redirect::route('admin.languages.types.index')
                       ->with('message', 'Tipo de linguagem criado com sucesso!')
                       ->with('alert-class', 'success');
    }

    public function EditType($id)
    {
        $item = LanguageType::find($id);

        return view('languages.types.edit', compact(['item', 'id']));
    }

    public function UpdateType(Request $req, $id)
    {
        $data = $req->all();

        LanguageType::find($id)->update($data);
        
        return Redirect::route('admin.languages.types.index')
                       ->with('message', 'Tipo de linguagem atualizado com sucesso!')
                       ->with('alert-class', 'success');
    }
}

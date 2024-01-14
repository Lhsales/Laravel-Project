<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\LanguageType;
use App\Enum\LanguageLevelEnum;
use Redirect;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('ensure.exist.languagetype')->only('EditType', 'UpdateType', 'DeleteType');
    }

    public function Index()
    {
        $list = Language::all();

        return view('languages.index', compact('list'));
    }
    public function Create()
    {
        $languageTypes = LanguageType::all()->sortBy('description', false);
        $languageLevels = LanguageLevelEnum::getAll();

        return view('languages.create', compact(['languageTypes', 'languageLevels']));
    }
    public function Save(Request $req)
    {
        $data = $req->all();

        Language::create($data);

        return Redirect::route('admin.languages.index')
                       ->with('message', 'Linguagem salva com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function Edit($id)
    {
        $item = Language::find($id);
        $languageTypes = LanguageType::all()->sortBy('description', false);
        $languageLevels = LanguageLevelEnum::getAll();
        
        return view('languages.edit', compact(['item', 'languageTypes', 'languageLevels']));
    }
    public function Update($id, Request $req)
    {
        $data = $req->all();

        Language::find($id)->update($data);

        return Redirect::route('admin.languages.index')
                       ->with('message', 'Linguagem atualizada com sucesso!')
                       ->with('alert-class', 'success');
    }

    // LanguageType functions
    public function Types()
    {
        $list = LanguageType::all()->sortBy('description', false);

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
    public function DeleteType($id)
    {
        LanguageType::find($id)->delete();

        return Redirect::route('admin.languages.types.index')
                       ->with('message', 'Tipo de linguagem removido com sucesso!')
                       ->with('alert-class', 'success');
    }
}

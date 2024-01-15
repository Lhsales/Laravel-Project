<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarity;
use App\Models\ScholarityType;
use Redirect;

class ScholarityController extends Controller
{
    public function __construct()
    {

    }

    public function Index()
    {

        return view('scholarity.index');
    }

    public function Types()
    {
        $list = ScholarityType::all()->sortBy('description', false);

        return view('scholarity.types.index', compact('list'));
    }
    public function CreateType()
    {
        return view('scholarity.types.create');
    }
    public function SaveType(Request $req)
    {
        $validation = $req->validate([
            'description' => 'required'
        ]);

        $data = $req->all();

        ScholarityType::create($data);

        return Redirect::route('admin.scholarity.types.index')
                       ->with('message', 'Tipo de escolaridade criado com sucesso!')
                       ->with('alert-class', 'success');
    }
}

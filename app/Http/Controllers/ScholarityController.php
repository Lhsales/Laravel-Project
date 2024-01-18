<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarity;
use App\Models\ScholarityType;
use Redirect;
use Carbon\Carbon;

class ScholarityController extends Controller
{
    public function __construct()
    {
        $this->middleware('ensure.exist.scholaritytype')->only('EditType', 'UpdateType', 'DeleteType');
    }

    public function Index()
    {
        $list = Scholarity::all();

        return view('scholarity.index', compact('list'));
    }
    public function Create()
    {
        $scholarityTypes = ScholarityType::all();

        return view('scholarity.create', compact('scholarityTypes'));
    }
    public function Save(Request $req)
    {
        $data = $req->all();

        $data['started_at'] = Carbon::createFromFormat('d-m-Y', '01-'. $data['started_at'])->format('Y-m-d');
        $data['ended_at'] = isset($data['ended_at']) ? Carbon::createFromFormat('d-m-Y', '01-'. $data['ended_at'])->format('Y-m-d') : null;

        Scholarity::create($data);

        return Redirect::route('admin.scholarity.index')
                       ->with('message', 'Escolaridade criada com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function Edit($id)
    {
        $item = Scholarity::find($id);
        $scholarityTypes = ScholarityType::all();

        return view('scholarity.edit', compact(['id', 'item', 'scholarityTypes']));
    }
    public function Update(Request $req, $id)
    {
        $data = $req->all();

        $data['started_at'] = Carbon::createFromFormat('d-m-Y', '01-'. $data['started_at'])->format('Y-m-d');
        $data['ended_at'] = isset($data['ended_at']) ? Carbon::createFromFormat('d-m-Y', '01-'. $data['ended_at'])->format('Y-m-d') : null;

        Scholarity::find($id)->update($data);

        return Redirect::route('admin.scholarity.index')
                       ->with('message', 'Escolaridade atualizada com sucesso!')
                       ->with('alert-class', 'success');
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
    public function EditType($id)
    {
        $item = ScholarityType::find($id);

        return view('scholarity.types.edit', compact(['item', 'id']));
    }
    public function UpdateType(Request $req, $id)
    {
        $validation = $req->validate([
            'description' => 'required'
        ]);

        $data = $req->all();

        ScholarityType::find($id)->update($data);

        return Redirect::route('admin.scholarity.types.index')
                       ->with('message', 'Tipo de escolaridade atualizado com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function DeleteType($id)
    {
        ScholarityType::find($id)->delete();

        return Redirect::route('admin.scholarity.types.index')
                       ->with('message', 'Tipo de escolaridade removido com sucesso!')
                       ->with('alert-class', 'success');
    }
}

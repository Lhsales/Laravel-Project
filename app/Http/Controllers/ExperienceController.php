<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Work;
use Redirect;
use Carbon\Carbon;

class ExperienceController extends Controller
{
    
    public function Index()
    {
        $list = Experience::all();

        return view('experiences.index', compact('list'));
    }
    public function Create()
    {
        return view('experiences.create');
    }
    public function Save(Request $req)
    {
        $req->validate([
            'ocupation' => 'required',
            'company' => 'required',
            'description' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable'
        ]);

        $data = $req->all();

        $data['started_at'] = Carbon::createFromFormat('d-m-Y', '01-'. $data['started_at'])->format('Y-m-d');
        $data['ended_at'] = isset($data['ended_at']) ? Carbon::createFromFormat('d-m-Y', '01-'. $data['ended_at'])->format('Y-m-d') : null;

        Experience::create($data);

        return Redirect::route('admin.experiences.edit', $id)
                       ->with('message', 'Experiência criada com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function Edit($id)
    {
        $item = Experience::find($id);

        return view('experiences.edit', compact(['item', 'id']));
    }
    public function Update(Request $req, $id)
    {
        $req->validate([
            'ocupation' => 'required',
            'company' => 'required',
            'description' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable'
        ]);

        $data = $req->all();

        $data['started_at'] = Carbon::createFromFormat('d-m-Y', '01-'. $data['started_at'])->format('Y-m-d');
        $data['ended_at'] = isset($data['ended_at']) ? Carbon::createFromFormat('d-m-Y', '01-'. $data['ended_at'])->format('Y-m-d') : null;

        Experience::find($id)->update($data);

        return Redirect::route('admin.experiences.edit', $id)
                       ->with('message', 'Experiência atualizada com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function Delete($id)
    {
        Experience::find($id)->delete();

        return Redirect::route('admin.experiences.index')
                       ->with('message', 'Experiência removida com sucesso!')
                       ->with('alert-class', 'success');
    }

    public function CreateWork($experience_id)
    {
        return view('experiences.works.create', ['experience_id' => $experience_id]);
    }
    public function SaveWork(Request $req, $experience_id)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = $req->all();
        $data['experience_id'] = $experience_id;

        Work::create($data);

        return Redirect::route('admin.experiences.edit', ['id' => $experience_id])
                       ->with('message', 'Trabalho criado com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function EditWork($experience_id, $work_id)
    {
        $item = Work::find($work_id);

        if ($item->experience_id != $experience_id)
            return Redirect::route('admin.experiences.index')
                           ->with('message', 'Dados inválidos para trabalho, acesse o trabalho via os menus: Experience > Edit > Works')
                           ->with('alert-class', 'warning');

        return view('experiences.works.edit', ['experience_id' => $experience_id, 'work_id' => $work_id, 'item' => $item]);
    }
    public function UpdateWork(Request $req, $experience_id, $work_id)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = $req->all();
        $data['experience_id'] = $experience_id;
        $data['id'] = $work_id;
        
        Work::find($work_id)->update($data);

        return Redirect::route('admin.experiences.edit', ['id' => $experience_id])
                       ->with('message', 'Trabalho atualizado com sucesso!')
                       ->with('alert-class', 'success');
    }

}

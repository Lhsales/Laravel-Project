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

        return Redirect::route('admin.experiences.index')
                       ->with('message', 'Experiência criada com sucesso!')
                       ->with('alert-class', 'success');
    }
    public function Edit($id)
    {
        $item = Experience::find($id);
        $works = Work::where(['experience_id' => $id]);

        return view('experiences.edit', compact(['item', 'id', 'works']));
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

        return Redirect::route('admin.experiences.index')
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
}

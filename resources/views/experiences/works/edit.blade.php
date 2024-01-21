@extends('layout.admin.base')

@section('head-title', 'Editar trabalho')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Editar trabalho
            </div>
            <div class="card-body">
                <form action="{{ route('admin.experiences.works.update', ['experience_id' => $experience_id, 'work_id' => $work_id]) }}" method="post" class="col s12">
                    {{ csrf_field() }}

                    @include('experiences.works.include._form')

                    <div class="row my-4">
                        <div class="col-10"></div>
                        <div class="col-2 text-center">
                            <button class="btn btn-primary w-75">Atualizar</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</section>

@endsection
@extends('layout.admin.base')

@section('head-title', 'Salvar trabalho')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Salvar trabalho
            </div>
            <div class="card-body">
                <form action="{{ route('admin.experiences.works.save', ['experience_id' => $experience_id]) }}" method="post" class="col s12">
                    {{ csrf_field() }}

                    @include('experiences.works.include._form')

                    <div class="row my-4">
                        <div class="col-10"></div>
                        <div class="col-2 text-center">
                            <button class="btn btn-primary w-75">Salvar</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</section>

@endsection
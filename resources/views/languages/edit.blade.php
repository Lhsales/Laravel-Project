@extends('layout.admin.base')

@section('head-title', 'Editar Linguagem')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Editar linguagem
            </div>
            <div class="card-body">                
                <form action="{{ route('admin.languages.update', $item->id) }}" method="post" class="col s12">
                    {{ csrf_field() }}

                    @include('languages.include._form')

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
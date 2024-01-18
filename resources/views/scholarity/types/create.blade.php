@extends('layout.admin.base')

@section('head-title', 'Criar Tipo de Escolaridades')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Criar tipo de escolaridade
            </div>
            <div class="card-body">                
                <form action="{{ route('admin.scholarity.types.save') }}" method="post" class="col s12">
                    <div class="row">
                        {{ csrf_field() }}

                        @include('scholarity.types.include._form')

                        <div class="col-2 text-center">
                            <button class="btn btn-primary w-75  ">Criar</button>
                        </div>                
                    </div>
                </form>    
            </div>
        </div>
    </div>
</section>

@endsection
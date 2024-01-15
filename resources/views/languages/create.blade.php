@extends('layout.admin.base')

@section('head-title', 'Salvar Linguagem')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Salvar linguagem
            </div>
            <div class="card-body">                
                <form action="{{ route('admin.languages.save') }}" method="post" class="col s12">
                    {{ csrf_field() }}

                    @include('languages.include._form')

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
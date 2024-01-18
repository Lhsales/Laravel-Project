@extends('layout.admin.base')

@section('head-title', 'Atualizar Escolaridade')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Atualizar linguagem
            </div>
            <div class="card-body">                
                <form action="{{ route('admin.scholarity.update', $id) }}" method="post" class="col s12">
                    {{ csrf_field() }}

                    @include('scholarity.include._form')

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

@section('custom-script')

@php
    $started_date = old('started_at', Carbon\Carbon::parse($item->started_at)->format('m/Y'));
    
    $ended_date = '';
    if (old('ended_at'))
        $ended_date = old('ended_at');
    else 
    {
        if (isset($item->ended_at))
            $ended_date = Carbon\Carbon::parse($item->ended_at)->format('m/Y');
    }
@endphp

<script>
    var started_date = "{{ $started_date }}";
    $("#started_at").datepicker({
        autoclose: true,
        format: "mm-yyyy",
        startView: "months",
        minViewMode: "months",
        language: "pt-BR"
    });
    $('#started_at').datepicker('update', started_date);

    var ended_date = "{{ $ended_date }}";
    $("#ended_at").datepicker({
        autoclose: true,
        format: "mm-yyyy",
        startView: "months",
        minViewMode: "months",
        language: "pt-BR"
    });
    $('#ended_at').datepicker('update', ended_date);
</script>
@endsection
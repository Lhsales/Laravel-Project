@extends('layout.admin.base')

@section('head-title', 'Salvar Experiência')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Atualizar experiência
            </div>
            <div class="card-body">
                <form action="{{ route('admin.experiences.update', $item->id) }}" method="post" class="col s12">
                    {{ csrf_field() }}

                    @include('experiences.include._form')

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
<section class="page-section">
    <div class="container">
        <div class="card">
            
            <div class="card-body">
                <div class="table-wrapper">
                    <div class="table-title text-bg-dark bg-dark">
                        <div class="row p-3">
                            <div class="col-10 px-4">
                                <h3><b>Trabalhos</b></h3>
                            </div>
                            <div class="col-2 text-center">
                                <a href="{{ route('admin.experiences.works.create', ['experience_id' => $item->id]) }}" class="btn btn-success icon">Adicionar</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="table-secondary" style="background-color:#222222">
                            <tr>
                                <th class="col-10 px-4 fs-5">Nome</th>
                                <th class="col-2 text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($works as $work)
                                <tr class="align-middle">
                                    <td class="px-4" style="cursor:pointer;" >{{$work->name}}</td>
                                    <td class="text-center">
                                        <a href="#" class="icon fs-4"><ion-icon name="create-outline"></ion-icon></a>
                                        <a href="#" data-href="#" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="icon fs-4 text-danger"><ion-icon name="trash-outline"></ion-icon></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('custom-script')

@php
    $started_date = '';
    if (old('started_at'))
        $started_date = old('started_at');
    else 
    {
        $started_date = $item->started_at ?? Carbon\Carbon::now();
        $started_date = Carbon\Carbon::parse($started_date)->format('m/Y');
    }

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
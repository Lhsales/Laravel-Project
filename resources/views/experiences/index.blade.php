@extends('layout.admin.base')

@section('head-title', 'Experiências')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="table-responsive" >
            <div class="table-wrapper">
                <div class="table-title text-bg-dark bg-dark">
                    <div class="row p-3">
                        <div class="col-10 px-4">
                            <h3><b>Experiências</b></h3>
                        </div>
                        <div class="col-2 text-center">
                            <a href="{{ route('admin.experiences.create')}}" class="btn btn-success icon">Adicionar</a>
                        </div>
                    </div>
                </div>
                <table class="table table-sm table-bordered table-hover">
                    <thead class="table-secondary" style="background-color:#222222">
                        <tr>
                            <th class="col-3 px-4 fs-5">Cargo</th>
                            <th class="col-3 px-4 fs-5">Empresa</th>
                            <th class="col-2 px-4 fs-5">Dt. Início</th>
                            <th class="col-2 px-4 fs-5">Dt. Fim</th>
                            <th class="col-2 text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                            <tr class="align-middle">
                                <td class="px-4" style="cursor:pointer;" onclick="window.location='{{ route('admin.experiences.edit', $item->id) }}'">{{ $item->ocupation }}</td>
                                <td class="px-4" style="cursor:pointer;" onclick="window.location='{{ route('admin.experiences.edit', $item->id) }}'">{{ $item->company }}</td>
                                <td class="px-4" style="cursor:pointer;" onclick="window.location='{{ route('admin.experiences.edit', $item->id) }}'">{{ $item->started_at }}</td>
                                <td class="px-4" style="cursor:pointer;" onclick="window.location='{{ route('admin.experiences.edit', $item->id) }}'">{{ $item->ended_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.experiences.edit', $item->id) }}" class="icon fs-4"><ion-icon name="create-outline"></ion-icon></a>
                                    <a href="#" data-href="{{ route('admin.experiences.delete', $item->id)}}" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="icon fs-4 text-danger"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@include('layout.include.modal.delete', ['text'=>'Deseja realmente remover essa experiência?']);

@endsection
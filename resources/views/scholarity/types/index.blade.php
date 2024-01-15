@extends('layout.admin.base')

@section('head-title', 'Tipos de Escolaridades')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="table-responsive" >
            <div class="table-wrapper">
                <div class="table-title text-bg-dark bg-dark">
                    <div class="row p-3">
                        <div class="col-10 px-4">
                            <h3>Tipos de <b>Escolaridades</b></h3>
                        </div>
                        <div class="col-2 text-center">
                            <a href="{{ route('admin.scholarity.types.create')}}" class="btn btn-success icon">Adicionar</a>
                        </div>
                    </div>
                </div>
                <table class="table table-sm table-bordered table-hover">
                    <thead class="table-secondary" style="background-color:#222222">
                        <tr>
                            <th class="col-10 px-4 fs-5">Descrição</th>
                            <th class="col-2 text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                            <tr class="align-middle">
                                <td class="px-4" style="cursor:pointer;" onclick="window.location='{{ route('admin.scholarity.types.edit', $item->id) }}'">{{ $item->description }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.scholarity.types.edit', $item->id) }}" class="icon fs-4"><ion-icon name="create-outline"></ion-icon></a>
                                    <a href="#" data-href="{{ route('admin.scholarity.types.delete', $item->id)}}" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="icon fs-4 text-danger"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@include('layout.include.modal.delete', ['text'=>'Deseja realmente remover esse tipo de escolaridade?']);


@endsection
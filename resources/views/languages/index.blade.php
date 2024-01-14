@extends('layout.admin.base')

@section('head-title', 'Linguagens')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="table-responsive" >
            <div class="table-wrapper">
                <div class="table-title text-bg-dark bg-dark">
                    <div class="row p-3">
                        <div class="col-10 px-4">
                            <h3><b>Linguagens</b></h3>
                        </div>
                        <div class="col-2 text-center">
                            <a href="{{ route('admin.languages.create')}}" class="btn btn-success icon">Adicionar</a>
                        </div>
                    </div>                    
                </div>
                <table class="table table-sm table-bordered table-hover">
                    <thead class="table-secondary" style="background-color:#222222">
                        <tr>
                            <th class="px-4 fs-5">Descrição</th>
                            <th class="px-2">Tipo</th>
                            <th class="px-2">Level</th>
                            <th class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td class="align-middle px-4" style="cursor:pointer;" onclick="window.location='{{ route('admin.languages.edit', $item->id) }}'">{{ $item->description }}</td>
                                <td class="px-2">{{ $item->language_type_id }}</td>
                                <td class="px-2">{{ $item->level }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.languages.edit', $item->id) }}" class="icon fs-4"><ion-icon name="create-outline"></ion-icon></a>
                                    <a href="#" data-href="{{ route('admin.languages.delete', $item->id)}}" data-bs-toggle="modal" data-bs-target="#confirm-delete" class="icon fs-4 text-danger"><ion-icon name="trash-outline"></ion-icon></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
</section>

@endsection
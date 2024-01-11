@extends('layout.admin.base')

@section('head-title', 'Tipos de Linguagens')

@section('content')

<section class="page-section">
    <div class="container">
        <div class="">
            <div class="table-wrapper">
                <div class="table-title text-bg-dark bg-dark">
                    <div class="row p-3">
                        <div class="col-10 px-4">
                            <h3>Tipos de <b>Linguagens</b></h3>
                        </div>
                        <div class="col-2 text-center">
                            <a href="#" class="btn btn-success icon">Adicionar novo tipo</a>
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
                            <tr  style="cursor:pointer;" onclick="window.location='{{ route('admin.languages.types.edit', $item->id) }}'">
                                <td class="align-middle px-4">{{ $item->description }}</td>
                                <td class="text-center">
                                    <a href="#" class="icon fs-4"><ion-icon name="create-outline"></ion-icon></a>
                                    <a href="#" class="icon fs-4 text-danger"><ion-icon name="trash-outline"></ion-icon></a>
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